$(document).ready(function () {
    var url = window.location;
    // console.log(url);

    $('ul.nav a[href="' + url + '"]').parent().addClass('active');
    $('ul.nav a').filter(function () {
        console.log(this.href);

        return this.href == url;

    }).parent().addClass('active');

});