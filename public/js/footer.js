 document.querySelectorAll('.foot-accordion-item__trigger').forEach((item) =>
        item.addEventListener('click', () => {
            const parent = item.parentNode;

            if (parent.classList.contains('foot-accordion-item--active')) {
                parent.classList.remove('foot-accordion-item--active');
            } else {
                document
                    .querySelectorAll('.foot-accordion-item')
                    .forEach((child) => child.classList.remove('foot-cordion-item--active'))

                    parent.classList.add('foot-accordion-item--active');
            }
        })
        )