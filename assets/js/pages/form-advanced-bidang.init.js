/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Form advanced Js File
*/


// Chocies Select plugin
document.addEventListener('DOMContentLoaded', function () {
  var genericExamples = document.querySelectorAll('[data-trigger]');
  for (i = 0; i < genericExamples.length; ++i) {
    var element = genericExamples[i];
    new Choices(element, {
    placeholderValue: 'This is a placeholder set in the config',
    searchPlaceholderValue: 'This is a search placeholder',
    });
  }
  

  // Pilih organisasi
  var singleNoSorting = new Choices('#idmd_organisasi', {
    shouldSort: false,
  });


  
  

});



