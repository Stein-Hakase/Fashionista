$(document).ready(function(){
  $('form').submit(function(event){
    event.preventDefault()
    const data ={
        // name :event.target.name.value ,
        email:event.target.email.value ,
    }
        var fd = new FormData();
        //very simply, doesn't handle complete objects
        for(var i in data){
        fd.append(i,data[i]);
        }
        let addsubscribe = async () =>{
        let post = await fetch('postsubscriber.php', {
        method: 'POST',
        body:fd,
        mode:"cors",
        }).then(function (response) {
            if (response.ok) {
                alert('Congratulations , your mail was saved  !! ')
                $( '.subscribers-link' ).css( "visibility", "visible" )
            } else {
                console.error('Something went wrong');
            }
        })
       
     }
      
        if (data.email){
            addsubscribe()
        }else alert('please enter your e-mail ')
  })

  });
