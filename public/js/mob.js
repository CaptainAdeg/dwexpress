  /* Tabs
    function focusTab(elem) {

        // Находим активную вкладку и дизактивируем
        let activeTab = document.querySelector('.activeTab');
        if(activeTab) {
            activeTab.classList.remove('activeTab');
        }

        // Активируем вкладку при клике
        if(elem.classList.value != 'activeTab') {
            elem.classList.add('activeTab');
        }

        // Находим отображаемый контент и скрываем
        let tabAllContent = document.querySelector('.showContent');
        if(tabAllContent) {
            tabAllContent.classList.remove('showContent');
        }

        // Отображаем контент активной вкладки
        let tabContent = document.querySelector('.tabContent'+elem.name);
        tabContent.classList.add('showContent');
    }*/

    document.querySelectorAll('.accordion-item__trigger').forEach((item) =>
        item.addEventListener('click', () => {
            const parent = item.parentNode;

            if (parent.classList.contains('accordion-item--active')) {
                parent.classList.remove('accordion-item--active');
            } else {
                document
                    .querySelectorAll('.accordion-item')
                    .forEach((child) => child.classList.remove('accordion-item--active'))

                    parent.classList.add('accordion-item--active');
            }
        })
        )