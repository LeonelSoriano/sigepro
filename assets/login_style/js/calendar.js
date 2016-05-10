// Calendar Widget

    (function($) {
        "use strict";

        $( ".cal" ).each(function() {
            var idCalendar = $(this).attr("id");
            /*var dateSuggest = $(this).find(".inputVal").val();*/

            moment.lang('en');
            var calendars = {};
            /*var thisMonth = moment().format('YYYY-MM');*/
            var thisMonth = $(this).find(".inputVal").val();
            var apointDay = $(this).find(".inputValDay").val();
            var eventArray = [
                /*{ startDate: thisMonth + '-10', endDate: thisMonth + '-14', title: 'Multi-Day Event' },*/
                { startDate: thisMonth + apointDay, endDate: thisMonth + apointDay, title: 'Suggested Day by Customer' }
            ];

            var calendarTrig = "#"+idCalendar;

            calendars.clndr1 = $(calendarTrig).clndr({
                events: eventArray,
                weekOffset: 1,
                daysOfTheWeek: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                clickEvents: {
                    click: function(target) {
                        if(target.events.length > 0) {
                            var el = target.element.children[0];
                            $(el).tooltip({
                              'title': target.events[0].title
                            });
                            $(el).tooltip('show');
                        }
                    }
                },
                multiDayEvents: {
                    startDate: 'startDate',
                    endDate: 'endDate'
                },
                showAdjacentMonths: true,
                adjacentDaysChangeMonth: true,
                doneRendering: function() {
                    $('.clndr-previous-button').html('<span class="fa fa-angle-left"></span>');
                    $('.clndr-next-button').html('<span class="fa fa-angle-right"></span>');
                    $('.clndr-table tr .day.event .day-contents').css('background-color','#0eaaa6');
                    $('.clndr-table tr .day.event .day-contents').css('color','#fff');
                    $('.clndr-table tr .day.event .day-contents').append('<i class="fa fa-star gotop"></i>');
                }
            });
           /*alert(thisMonth);*/
        });/*each*/
    })(jQuery);
