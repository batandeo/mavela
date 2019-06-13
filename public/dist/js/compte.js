

    $('#form-physique').hide()
    $('#form-moral').hide()

    $('#btn-moral').click(function () {
        $('#form-moral').show()
        $('#form-physique').hide()
    })
    $('#btn-physique').click(function () {
        $('#form-physique').show()
        $('#form-moral').hide()
    })

