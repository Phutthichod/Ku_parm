

<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "Calendar";
?>

<?php include_once("../layout/LayoutHeader.php"); ?>

<style>
	#card-detail{
		color:white;
    	background-color:#F44336;
	}
	#calendar{

	}
	/* input[type="checkbox"]{
		position: absolute;
		right: 9000px;
	} */
	input[type=checkbox]{
		background-color:#F44336;
		color:#F44336;
	}
</style>


<div class="container">
    <div class="row">

		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<div class="card mb-4">
                <div class="card-header" id="card-detail">
                  กิจกรรม
                </div>
                <div class="card-body">
					
					<input type="checkbox" name="vehicle1" class="checkmark" value="Bike" > ทั้งหมด <br>
					<input type="checkbox" name="vehicle1" class="checkmark1" value="Bike" > ให้ปุ๋ย<br>
					<input type="checkbox" name="vehicle1" class="checkmark2" value="Bike" > ให้น้ำ<br>
					<input type="checkbox" name="vehicle1" class="checkmark3" value="Bike" > ล้างคอขวด<br>
					<input type="checkbox" name="vehicle1" class="checkmark4" value="Bike" > จำกัดศัตรูพืช<br>
					<input type="checkbox" name="vehicle1" class="checkmark5" value="Bike"> กิจกรรมอื่นๆ<br>
					

					
                </div>
            </div>

		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div id='calendar' style="margin: 0 auto;
				width: 800px;
				background-color: #FFFFFF;
				border-radius: 6px;
				box-shadow: 0 1px 2px #C3C3C3;">
			</div>
		</div>
    	
    </div>
</div>


<?php include_once("../layout/LayoutFooter.php"); ?>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=map_create" async defer></script>
<script src="Calendar.js"></script>

<script>



 var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
        var y = date.getFullYear();
        


        var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',

			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped

				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');

				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);

				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;

				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}

			},

			events: 
			[
				{
					title: `ใส่ปุ๋ย  
							ชื่อสวน : แปลงนัท`,
					start: new Date(2019, 04, 26, 12, 0),
					end: new Date(2019, 04, 29, 12, 0),
					allDay: true,
					className: 'important',
					color: '#20D1D1',
					textColor: 'white'
				},
				{
					title: `ให้น้ำ  
							ชื่อสวน : แปลงนัท`,
					start: new Date(2019, 05, 01, 12, 0),
					allDay: true,
					className: 'important',
					color: '#F0B27A',
					textColor: 'white'
				},
				{
					title: `ให้น้ำ  
							ชื่อส่วน : แปลงนัท`,
					start: new Date(2019, 05, 05, 12, 0),
					allDay: true,
					className: 'important',
					color: '#82E0AA',
					textColor: 'white'
				},
				{
					title: `ชื่อแปลง : ไลอ้อน 3
							ปริมาณ : 150 ลบ.ม.`,
					start: new Date(2019, 05, 06, 12, 0),
					allDay: true,
					className: 'important',
					color: '#D2B4DE',
					textColor: 'white'
				},
				{
					title: `ชื่อแปลง : ไลอ้อน 3
							ปริมาณ : 100 ลบ.ม.`,
					start: new Date(2019, 05, 08, 12, 0),
					allDay: true,
					className: 'important',
					color: '#F7DC6F',
					textColor: 'white'
        		}
			],
		});
</script>