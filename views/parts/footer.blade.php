<div class="mt-4"></div>
<footer class="footer mt-auto bg-gray-900">
    <div class="container my-4 text-xs uppercase text-white opacity-50">
        <div class="t-text t-descr_sm" field="text">
            <span>Наш Адрес:</span>
            @if (evo()->getConfig('client_address') != '')
                {{ evo()->getConfig('client_address') }}
            @endif
            <br /><span>Телефон:</span>
            <a href="{{ evo()->getConfig('client_phone_raw') }}">
                {{ evo()->getConfig('client_phone_display') }}
            </a>
            <br />
            <br /><span>WhatsApp:</span>{{ evo()->getConfig('client_phone_display') }}
            <br />
            {{-- <br /><a href="/">Наши Вакансии</a> --}}
        </div>
    </div>
</footer>
