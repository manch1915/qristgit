$(document).ready(function () {
    $('.stranica').hover(function () {
            $('.menu__sub-list').addClass('dspblock')
        }, function () {
            $('.menu__sub-list').removeClass('dspblock')
        }
    );
    $('.menu__icon').click(function () {
        $('.menu__icon').toggleClass('_active');
        $('.menu__list').toggleClass('burger_active');
        document.body.classList.toggle('__lock');
    });
    $('#submit_admin').click(function () {
        $.post("admin_comp.php", {login: $('#login').val(), password: $('#password').val()}, function (data) {
            if (data == '') {
                location.reload();
            }
            $('#error').html(data)
        });
    })
    let calc = 0
    let hashv = ''
    $('#paragraf').click(function () {
        $('.form').append('<div class="input-group m-2">\n' +
            '  <span class="input-group-text">Պառագրֆ</span>\n' +
            '  <textarea class="form-control" aria-label="With textarea" name="textarea' + calc + '" id="put' + calc + '"></textarea>\n' +
            '</div>');
        hashv += 'p'
        calc++;
    })
    $('#aj').click(function () {
        $('.form').append('<div class="input-group mb-3"> \n' +
            '<label class="input-group-text" htmlFor="inputGroupFile01">Upload aj</label> \n' +
            '<input type="file" class="form-control" id="put' + calc + '" name="put' + calc + '"> \n' +
            '</div>');
        hashv += 'a'
        calc++;
    })
    $('#dzax').click(function () {
        $('.form').append('<div class="input-group mb-3"> \n' +
            '<label class="input-group-text" htmlFor="inputGroupFile01">Upload dzax</label> \n' +
            '<input type="file" class="form-control" id="put' + calc + '" name="put' + calc + '"> \n' +
            '</div>');
        hashv += 'd'
        calc++;
    })
    $('#mejtex').click(function () {
        $('.form').append('<div class="input-group mb-3"> \n' +
            '<label class="input-group-text" htmlFor="inputGroupFile01">Upload Mejtex</label> \n' +
            '<input type="file" class="form-control" id="put' + calc + '" name="put' + calc + '"> \n' +
            '</div>');
        hashv += 'm'
        calc++;
    })
    $('#hashvarkel').click(function () {
        $('.form').append('<input type="text" class="form-control" name="hashv" value="' + hashv + '"> \n');
    })
    $('#erekket').click(function (){
        $('.zakrep_desc').html('<span style="font-size: 125%;">Հայր Վահան Հովհաննիսյան</span><br>Հիշում եք, անշուշտ, Ավետարանի այն դեպքը, ուր պատմվում է, թե մի օր, երբ մանուկները, Հիսուսի անհուն բարությունից հրապուրված, մոտենում են Նրան, առաքյալները սաստում են, որ հեռանան։ Սակայն Հիսուս նեղանում է Առաքյալների վրա և ասում նրանց .<< Թույլ տվեք, որ մանուկներն ինձ մոտ գան, որովհետև նրանցն է երկնքի արքայությունը>>։ \n' +
            'Այս դեպքը ցույց է տալիս, թե Հիսուս որքա՜ն է սիրում մանուկներին և որքա՜ն է փափագում, որ նրանք իր մոտ ապրեն։\n' +
            'Հիսուսի այս Սուրբ փափագը իմանալուց հետո՝ ո՞ր մանուկը կուզենա նրանից հեռու ապրի։\n' +
            'Հիսուսից հեռու ապրել նշանակում է խավարի ու մեղքի մեջ թափառել, թշվառ ու անհույս մի կյանք անցնել երկրի վրա և հետո կորցնել Աստծուն՝ մեր միակ երջանկությանը։\n' +
            'Ընդհակառակը, որքա՜ն քաղցր է ապրել Հիսուսի մոտ ՝ սրտի անմեղությամբ և բարի գործերով։ Այդպիսի կյանքը ձեզ միայն սրտի երջանկություն կտա, կլինեք ձեր ծնողների ուրախությունն ու օգտակար ձեր ազգին և կապահովեք երկնքի արքայությունը ձեր համար։\n' +
            'Մտածեք, թե ձեզնից առաջ ամեն ազգից ու աշխարհից, ամեն հասակից ու վիճակից որքա՜ն անթիվ ու անհամար հոգիներ են սիրել ապրել Հիսուսի մոտ, և այդպես երկրի վրա սրբացած՝ հիմա երկնքի անպատմելի ուրախության մեջ վայելում են Աստծուն։\n' +
            'Նրանցից հետո ձեզ է, որ Հիսուս հրավիրում է, հետևեցե՛ք նրան, Ով Ճանապարհ է, Ճշմարտություն և Կյանք։\n' +
            'Թերևս վախենում եք և չգիտեք ինչպես գնալ Հիսուսի մոտ և իր մոտ մի կյանք ապրեք։\n' +
            'Այդ պատճառով ձեզ համար պատրաստեցինք այս գրքույկը ամենը։ Դուք ձեզ օրինակ և առաջնորդ պիտի գտնեք, սրբակյա՛ց մանուկներ, որոնց վարքից պիտի սովորեք, թե ինչպես հեշտությամբ սուրբ լինել։\n' +
            'Ուշադրություն դարձնենք, թե ինչես բոլորի մեջ Ս. Հաղորդագրության հատուկ սեր և ջերմեռանդություն կա։ Դա է մեծ գաղտնիքը ձեր սրբության, ինչպես որ հայտնեց Ս. Պապ Պիոս տասներորդը և հորդորեց, որ այն փոքր մանուկները, որ արդեն խելահաս են՝ ստեպ Ս. Հաղորդագրության մոտենան։\n' +
            'Ուրեմն սիրեցե՛ք Ս. Հաղորդագրությունը և ստեպ - երա՜նի թե նաև ամեն օր - ընդունե՛ք Այն  մաքուր սրտով և տաքուկ սիրով և ձեր արքայությունը այս աշխարհից պիտի սկսվի։')
    })
});



$('.index_header_slider').slick({
    infinite: true,
    slidesToShow: 3,
    arrows:true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});