/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Table editable Init Js File
*/

// table edits table

$(function () {
    var pickers = {};
    $('.table-edits tr').editable({
        dropdowns: {
            jeniskelamin: ['P', 'W'],
            levelpendidikan: ['SD', 'SMP', 'SMA', 'SMK', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2'],
            statusjabatan: ['Def.', 'Pgs.', 'Pjs.', 'Plt.'],
            agama: ['Islam', 'Hindu', 'Kristen', 'Katolik', 'Budha']
          },
        maintainWidth: true,
        keyboard: true,
        dblclick: true,
        edit: function (values) {
            $(".edit i", this)
                .removeClass('bx-edit-alt')
                .addClass('bx-save')
                .attr('title', 'Save');

        },
        save: function (values) {
            $(".edit i", this)
                .removeClass('bx-save')
                .addClass('bx-edit-alt')
                .attr('title', 'Edit');
                

                
            var id = $(this).data('id');
            $.post('apiupdatedata/' + id, values)
                .done(function() {
                    alert( "Data berhasil di update" );
                  })
                  .fail(function() {
                    alert( "Data gagal di update" );
                  })

                
             if (this in pickers) {
                pickers[this].destroy();
                delete pickers[this];
            }     

        },
        cancel: function (values) {
            $(".edit i", this)
                .removeClass('bx-save')
                .addClass('bx-edit-alt')
                .attr('title', 'Edit');

            if (this in pickers) {
                pickers[this].destroy();
                delete pickers[this];
            }
        }

    }

    );

    
});

