<footer class="footer mt-auto bg-gray-900">
    <div class="container my-4 text-xs uppercase text-white opacity-50">
        <div class="t-text t-descr_sm" field="text">
            <span>Наш Адрес:</span>
            @if (evo()->getConfig('client_address') != '')
                {{ evo()->getConfig('client_address') }}
            @endif
            <br /><span>Телефон:</span><a href="tel:+79999999999">+7 (999)
                999-99-99</a>
            <br />
            <br /><span>WhatsApp:</span>+7 (999) 999-99-99
            <br />
            <br /><a href="/">Наши Вакансии</a>
        </div>
    </div>
</footer>
