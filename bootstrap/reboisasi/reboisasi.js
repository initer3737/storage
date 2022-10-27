const playSelect=()=>{
    let audio=new Audio('../../vanila/porto/sound/select.mp3')
    return audio.play()
}
const playActive=()=>{
    let audio=new Audio('../../vanila/porto/sound/clickselek.mp3')
    return audio.play()
}

const bird=()=>{
    let audio=new Audio('../assets/bird.mp3')
        audio.loop=true
    return audio.play()
}

bird();