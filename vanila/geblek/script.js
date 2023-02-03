const getIdElement=id=> document.getElementById(id)

getIdElement('icon').addEventListener('click',(e)=>{
    const attr=getIdElement('geblek').getAttribute('tes')
    alert(attr)
})

const body=document.getElementsByTagName("BODY")[0]

 setInterval(jam,1000)

        function jam(){
            let jam=new Date()
            getIdElement('jam').innerHTML=jam.toLocaleTimeString()
        }