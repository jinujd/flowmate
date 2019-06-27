$(document).ready(function(){


  // Code for right menu click (Submenu)
  $('.has-submenu').click(function(){
    $(this).find('.right-sub-menu').show()
  });


// Table code
  var t = $('#datatable').DataTable( {
          "dom": '<"bottom"i>rt<"bottom"flp><"clear">',
          "columnDefs": [ {
              "searchable": false,
              "orderable": false,
              "targets": 0
          } ],
          "order": [[ 1, 'asc' ]],
          "pageLength": 20
      } );

      t.on( 'order.dt search.dt', function () {
          t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();

  // Code for right click menu ////ContextMenu
  $(function() {
      var $contextMenu = $("#contextMenu");
      $("body").on("contextmenu", ".treeView li", function(e) {
           $contextMenu.css({
                display: "block",
                left: e.pageX,
                top: e.pageY
           });
           $(".li-bg").show();
           var offset = $(this).offset();
           var top = offset.top - 120;
           $('.li-bg').css('top', top);
           return false;
      });

      $(document).mouseup(function(e)
      {
          var container = $("#contextMenu");

          // if the target of the click isn't the container nor a descendant of the container
          if (!container.is(e.target) && container.has(e.target).length === 0)
          {
              container.hide();
              $('.li-bg').hide();
          }
      });

      // $('html').click(function() {
      //      $contextMenu.hide();
      // });
  });

// Tree menu
  $('.treeView li:has(li)').addClass("Min").click(function (e) {
     $(this).toggleClass("Max Min")
     $(this).children().toggle()
      e.stopPropagation();
  });

// Panel Click
  $('.panel-title').click(function(){
    $(this).find('.panel-heading').toggleClass('active');
    $(this).find('.dropdown-icon').toggleClass('rotate');
  });

  //Table pagination
  var html = $("<div />").append($(".dataTables_length").clone()).html();
  $('.page-show').html(html);

  // var html = $("<div />").append($(".dataTables_paginate ").clone()).html();
  // $('.page-nav').html(html);
  //
  // var html = $("<div />").append($(".dataTables_info ").clone()).html();
  // $('.page-info').html(html);

  // Active class on side panel accordian list click
  $('.limenu li').click(function(){
    $('.limenu li').removeClass("active");
    $(this).addClass("active");
  })

  $(".modal-accordian .btn-hold button").click(function(){
    $(this).find("img").toggleClass("closed");
  })

})
