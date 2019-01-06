// Contact page code.
// const MILE_RADIUS = 9;

let formSubmit = $('#form-submit');
let form = formSubmit.closest('form');
formSubmit.on('click', () => {
    let values = {};
    form.find('input, textarea').map((key, value) => {
        value = $(value);

        values[value.attr('id')] = value.val();

        if (value.attr('type') === 'checkbox') {
            values[value.attr('id')] = value.is(':checked');
        }
    });

    console.log(values);
});