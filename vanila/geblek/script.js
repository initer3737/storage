const getIdElement=id=> document.getElementById(id)

getIdElement('icon').addEventListener('click',(e)=>{
    const attr=getIdElement('geblek').getAttribute('tes')
    alert(attr)
})
