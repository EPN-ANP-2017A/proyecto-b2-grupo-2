$(document).ready(function () {
    $('#search').focus()
   // $('#search').on('keyup',function () {
     //   var search = $('#search').val()
       // console.log(search)
    //})
    $('#busq').on('click',function () {
        var search = $('#search').val()
        $.ajax({
            type: 'GET',
            url:'/destinos',
            data:{'search': search}
        })
            .done(function (resultado) {
                $('#result').html(resultado

                )

            })
            .fail(function () {
                alert('hubo un error')

            })

    })
})