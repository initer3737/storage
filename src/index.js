const IconAppear=(Icon)=>{
    const icon=document.getElementById(Icon)
    if(icon.classList.contains('d-none'))icon.classList.remove('d-none')
   const audio=new Audio('vanila/porto/sound/select.mp3')
    audio.play()
}

const IconDissAppear=(Icon)=>{
    const icon=document.getElementById(Icon)
     icon.classList.add('d-none')
}

const onActiveClick=()=>new Audio('vanila/porto/sound/clickselek.mp3').play();

document.addEventListener('mousemove',(e)=>{
    let bg=document.getElementById('weejio-begeh')
        bg.style.height=100+e.pageY/20+'vh'
        bg.style.width=100+e.pageX/40+'vw'
        bg.style.transform=`scale(${1+e.pageY/402})`
})