let rng = document.querySelector('.range [type=range]')
let num = document.querySelector('.range [type=number]')
let rng2 = document.querySelector('.range2 [type=range]')
let num2 = document.querySelector('.range2 [type=number]')

rng.addEventListener('input', () => 
	num.value = rng.value
)
num.addEventListener('input', () => 
	rng.value = num.value
)
rng2.addEventListener('input', () => 
	num2.value = rng2.value
)
num2.addEventListener('input', () => 
	rng2.value = num2.value
)


$( function() {
    $( "#a" ).datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: 'dd.mm.yy'
    });
} );


