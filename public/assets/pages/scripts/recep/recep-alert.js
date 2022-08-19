 function AlertWaiting() {
    

                        let timerInterval
                        Swal.fire({
                        title: '<strong> <h1 style="color:white !important; font-size:50;" class="animate__animated animate__headShake animate__repeat-2">'+ document.getElementById('nv').value+'</h1></strong> <br> <em><h4 style="color:white">'+ document.getElementById('comentario_visitante').value+ "</h4> </em>",
                        html: '<h2 style="color:white"><i class="fa fa-building"></i> Empresa: ' + document.getElementById('ne').value + '</h2>',
                        footer: '<h3 style="color:white"><span  class="pull-right text-description small"><i class="fa fa-clock"></i>'+ ' '+ document.getElementById('waittime').value + '</span></h3>',
                        position: 'center',
                        grow:'fullscreen',
                        icon: "info",
                        background: 'red',
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
 }