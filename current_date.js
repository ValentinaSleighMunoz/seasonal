function display_current_date(){
    let date = new Date();
    let currDate = date.toLocaleDateString("en-GB");
    let currMonth = date.toLocaleString('default', { month: 'long' });

    $("#currDate").text(currDate);
    // or
    // $('[name="currDate"]').text(currDate);
    // or
    // $('[id="currDate"]').text(currDate);

    document.querySelector(
        "#currMonth"
    ).textContent = currMonth;
}
