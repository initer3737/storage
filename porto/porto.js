const playSelect=()=>{
    let audio=new Audio('sound/select.mp3')
    return audio.play()
}
const playActive=()=>{
    let audio=new Audio('sound/clickselek.mp3')
    return audio.play()
}

const toTop=()=>window.scrollTo(0,0);