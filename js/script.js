//the animator
$('body').on('change', update);
$('body').on('click', update);

function display(lc) {

    lc = Math.round(lc);

    console.log('lc', lc);
    lc = lc.toString();
    lc = lc.split('')
    lc = lc.reverse();

       

    let p_100 = 0;

    if (lc[2]) {
        p_100 = lc[2];
    }

    let p_10 = 0;
    if (lc[1]) {
        p_10 = lc[1];
    }

    let p_1 = lc[0];

    let f = 30;

    // $('.n-100000').animate({ 'margin-top': p_100000 * -f });
    // $('.n-10000').animate({ 'margin-top': p_10000 * -f });
     //$('.n-1000').animate({ 'margin-top': p_1000 * -f });
    $('.n-100').animate({ 'margin-top': p_100 * -f });
    $('.n-10').animate({ 'margin-top': p_10 * -f });
    $('.n-1').animate({ 'margin-top': p_1 * -f });
}



function update() {


    let skill = $('#skill>option:selected').val();
    let whatskill = $('#skill>option:selected').text();
    skill = parseInt(skill);
    skill = skill ? skill : 0;

    let data = $('.data>input:checked').val();
    data = parseInt(data);

    data = data ? data : 0;

    let extra = 0;

    // $('.extra>input:checked').each(function () {
    //     let x = parseInt($(this).val());
    //     if (x > 0) {
    //         extra += x;
    //     }
    // });

    let lc = skill + data + extra;
    choice(whatskill, data, lc)
}

function choice(whatskill, data, lc) {

    $('#lc').val(lc);
    display(lc);
}