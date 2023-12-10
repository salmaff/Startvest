function toggleBankOptions() {
    var bankOptions = document.querySelector('.meth-bank-opt');
    var chevronIcon = document.getElementById('chevron-icon');

    if (bankOptions.style.display === 'none' || bankOptions.style.display === '') {
        bankOptions.style.display = 'grid';
        chevronIcon.classList.add('rotate-down');
    } else {
        bankOptions.style.display = 'none';
        chevronIcon.classList.remove('rotate-down');
    }
}
