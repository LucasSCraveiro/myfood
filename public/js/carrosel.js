// $(document).ready(function(){
    
//     $(".carousel").carousel({
//         interval: false,
//         pause: true
//     });

//     $( ".carousel .carousel-inner").swipe({
//         swipeLeft: function (event, direction, distance, duration, fingerCount){
//             this.parent( ).carousel( 'next');
//         },
//         swipeRight: function ( ) {
//             this.parent ( ).carousel( 'prev' );
//         },
//         threshold: 0,
//         tap: function(event, target) {
//             window.location = $(this).find('.carousel-item.active a').attr('href');
//         },
//         excludedElements: "label, button, input, select, textarea, .noSwipe"
//     });

//     $('.carousel .carousel-inner').on('dragstart', 'a', function(){
//         return false;
//     });

// });

// $(document).ready(function(){
  
//     $(".carousel").carousel({
//       //ปิดการเล่น auto
//       interval: false,
//       pause: true
//     });
    
//     $( ".carousel .carousel-inner" ).swipe( {
//       swipeLeft: function ( event, direction, distance, duration, fingerCount ) {
//         this.parent( ).carousel( 'next' );
//       },
//       swipeRight: function ( ) {
//         this.parent( ).carousel( 'prev' );
//       },
//       threshold: 0,
//       tap: function(event, target) {
//         // get the location: in my case the target is my link
//         window.location = $(this).find('.carousel-item.active a').attr('href');
//       },
//       //เอา  a ออกถ้าต้องการให้ slide ที่เป็น tag a สามารถคลิกได้
//       excludedElements:".noSwipe"
//     } );
    
//     $('.carousel .carousel-inner').on('dragstart', 'a', function () {
//       return false;
//     });  
    
//   });

// $(".carousel").swipe({

//     swipe: function(event, direction, distance, duration, fingerCount, fingerData){
        
//         if (direction == 'left') $(this).carousel('next');
//         if (direction == 'right') $(this).carousel('prev');

//     },
//     allowPageScroll: "vertical"

// });