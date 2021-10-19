const slideUpTrigger = document.querySelectorAll('.slide-up-trigger');
slideUpTrigger.forEach(t => {
    t.addEventListener('click', () => {

        document.querySelector('#' + t.dataset.slide)
            .classList.toggle('active');

        Array.from(slideUpTrigger).filter(i => i !== t).forEach(s => {
            document.querySelector('#' + s.dataset.slide)
                .classList.remove('active');
        })
    })
});
