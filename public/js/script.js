function init() {
    classForCinema = "seat";
    classForCinemaBooked = "seat-booked";
    classForCinemaArchive = "seat-archive";
    classForCinemaBookedArchive = "seat-booked-archive";
    moviesSession = getMovieSession();
    checkDate = getDate();
    dateForArchive = 7;
    dateForAvailable = 7;
    // plan of the hall by rows total capacity 300 seats
    let cinemaHall = {
        row: [10, 20, 30, 30, 30, 30, 30, 30, 30, 30, 30]
    };

    tickets = [];

    renderingCinemaHall(cinemaHall);
}

init();

function renderingCinemaHall(cinemaHall) {
    getTicketInDb();
    if(!compareArchiveDate()) {
        drawCinemaHallArchive(cinemaHall)
    } else {
        drawCinemaHall(cinemaHall);
    }
    setHtmlCinemaHall();

}

function drawCinemaHall(cinemaHall) {
    let numberTicket = 1;
    let ticketInLocalStorage = getTicket();
    cinemaHallMap = '';

    if(compareAvailableDate()) {
        $.each(cinemaHall.row, function(row, numberOfSeats) {
            let cinemaHallRow = '';

            for (i = 1; i <= numberOfSeats; i++) {
                // collection of rows
                cinemaHallRow += '<div class="'+checkingBookedTickets(ticketInLocalStorage, numberTicket)+'" data-row="' +
                    numberTicket + '">'+numberTicket+'</div>';
                numberTicket++;
            }
            //we assemble a hall with aisles between the rows
            cinemaHallMap += cinemaHallRow + '<div class="passageBetween">&nbsp;</div>';
        });
    }

}

function drawCinemaHallArchive(cinemaHall) {
    let numberTicket = 1;
    let ticketInLocalStorage = getTicket();
    cinemaHallMap = '';

    $.each(cinemaHall.row, function(row, numberOfSeats) {
        let cinemaHallRow = '';

        for (i = 1; i <= numberOfSeats; i++) {
            // collection of rows
            cinemaHallRow += '<div class="'+checkingBookedTicketsArchive(ticketInLocalStorage, numberTicket)+'" data-row="' +
                numberTicket + '">'+numberTicket+'</div>';
            numberTicket++;
        }
        //we assemble a hall with aisles between the rows
        cinemaHallMap += cinemaHallRow + '<div class="passageBetween">&nbsp;</div>';
    });
}

$(document).on('change', '#movieSession, #datepicker', function() {
    init();
    setHtmlCinemaHall();
    checkIfErrors();
});

$(document).on('click', '.seat', function(e) {
    bookingTickets(e);
    $(e.currentTarget).toggleClass('bay');
});

function setHtmlCinemaHall() {
    $('.hall').html(cinemaHallMap);
}

function bookingTickets(e) {
    let seat = $(e.target).data('row');
    checkIfErrors();
    if(checkDate && moviesSession) {
        if(e.target.className == classForCinema) {
            buyTicket(seat);
        } else {
            removeTicket(seat);
        }
    }
}

function getTicketInDb() {
    $.ajax({
        url:base_path + "api/v1/seance" + "?date=" + checkDate + "&time=" + moviesSession ,
        async: false,
        type:'GET',
        success:function(data){
            console.log(data);
            if(data?.seance?.tickets) {
                drawNameFilm("Movie title: " + data.seance.name);
                for (let index in data.seance.tickets) {
                    tickets.push(data.seance.tickets[index].ticket);
                }
            } else {
                drawNameFilm();
            }
            if(data?.time) {
                drawSelect(data.time);
            }
        },
        error:function (data) {
        }
    });
}

function buyTicket(numberTicket) {
    messagesTicket();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:base_path + "api/v1/seance/store",
        type:'POST',
        data:{date:checkDate, time:moviesSession, ticket:numberTicket},

            success:function(data){
                if( data.number) {
                    messagesTicket(false, true, "You have successfully booked a ticket № "+ data.number);
                } else {
                    messagesTicket(false, false, "Movie seance for this date and time not found");
                }
            },
            error:function (reject) {
                messagesTicket(false, false, "Something went wrong, it was not possible to book a ticket");
                /*console.log($.parseJSON(reject.responseText));*/
            }
    });
}

function removeTicket(numberTicket) {
    messagesTicket();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:base_path + "api/v1/seance/remove",
        type:'POST',
        data:{date:checkDate, time:moviesSession, ticket:numberTicket},

        success:function(data){
            messagesTicket(false, true, "You canceled your booking");
        },
        error:function (reject) {
            messagesTicket(false, false, "Something went wrong");
            /*console.log($.parseJSON(reject.responseText));*/
        }
    });
}

function drawSelect(options) {
    if(options) {
        let opt = '';
        opt += ('<option selected>Choose a seance time</option>')
        for (let index in options) {
            let time = options[index].substr(0, 5);
            if(moviesSession == time) {
                opt += ('<option value='+time+' selected>'+time+'</option>')
            } else {
                opt += ('<option value='+time+'>'+time+'</option>')
            }
        }
        $('#movieSession').html(opt);
    }
}

function drawNameFilm(text = "") {
    $('#nameOfMovie').html(text);
}

function checkingBookedTickets(ticketInLocalStorage, value) {
    if(ticketInLocalStorage !== null) {
        if(ticketInLocalStorage.includes(value)) {
            return classForCinemaBooked;
        }
    }
    return classForCinema;
}

function checkingBookedTicketsArchive(ticketInLocalStorage, value) {
    if(ticketInLocalStorage !== null) {
        if(ticketInLocalStorage.includes(value)) {
            return classForCinemaBookedArchive;
        }
    }
    return classForCinemaArchive;
}

function compareArchiveDate() {
    let currentDate = new Date()
    let available = new Date(currentDate.setDate(currentDate.getDate() - dateForArchive))

    let dd = String(available.getDate()).padStart(2, '0');
    let mm = String(available.getMonth() + 1).padStart(2, '0');
    let yyyy = available.getFullYear();

    let archiveDate = yyyy + '-' + mm + '-' + dd;

    if(checkDate > archiveDate) {
        return true;
    } else {
        return false;
    }
}

function compareAvailableDate() {
    let currentDate = new Date()
    let available = new Date(currentDate.setDate(currentDate.getDate() + dateForAvailable))

    let dd = String(available.getDate()).padStart(2, '0');
    let mm = String(available.getMonth() + 1).padStart(2, '0');
    let yyyy = available.getFullYear();

    let futureDay = yyyy + '-' + mm + '-' + dd;

    if(checkDate < futureDay) {
        return true;
    } else {
        return false;
    }
}

function getDate() {
    let datePicker = $("#datepicker").datepicker("getDate");
    return $.datepicker.formatDate("yy-mm-dd", datePicker);
}

function getTicket() {
    return tickets;
}

function getMovieSession() {
    return $("#movieSession").find(":selected").val();
}

function checkIfErrors() {
    if( checkDate.length === 0 || moviesSession.length === 0) {
        $(".d-none-alert-danger").removeClass('d-none');
    } else {
        $(".d-none-alert-danger").addClass('d-none');
    }

    if(compareAvailableDate()) {
        $(".d-none-alert-danger").addClass('d-none');
    } else {
        $(".d-none-alert-danger").removeClass('d-none');
        $(".d-none-alert-danger > p").html("You can book a ticket for "+dateForAvailable+" days in advance.");
    }
    messagesTicket();
}

function messagesTicket(start = true, success = true, message = "") {
    if(start) {
        $(".d-none-alert-success").addClass('d-none');
    } else {
        if(success) {
            $(".d-none-alert-success").removeClass('d-none alert-danger').addClass('alert-success');
            $(".d-none-alert-success > p").html(message);
        } else {
            $(".d-none-alert-success").removeClass('d-none alert-success').addClass('alert-danger');
            $(".d-none-alert-success > p").html(message);
        }

    }
}
