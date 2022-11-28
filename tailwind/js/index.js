const IconDissAppear=(Icon)=>{
    const icon=document.getElementById(Icon)
     icon.classList.add('hidden')
}

const IconAppear=(Icon)=>{
    const icon=document.getElementById(Icon)
        if(icon.classList.contains('hidden'))icon.classList.remove('hidden')
}