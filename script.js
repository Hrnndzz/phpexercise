const nethStage = document.querySelector('.nethStage');

window.addEventListener('scroll', () => {
    const isInView = nethStage.getBoundingClientRect().top < window.innerHeight;
    const audio = nethStage.querySelector('audio');
    if (isInView && audio.paused) {
        audio.play();
    }
});