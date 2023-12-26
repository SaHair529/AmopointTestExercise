const inputsSelector = document.getElementById('inputs_selector')

inputsSelector.addEventListener('change', hideRedundantInputs)

function hideRedundantInputs(e) {
    const selectedType = e.target.value

    const inputs = document.querySelectorAll('[name]')

    inputs.forEach(inp => {
        if (inp.getAttribute('name') !== selectedType)
            inp.classList.add('hidden')
        else
            inp.classList.remove('hidden')
    })
}