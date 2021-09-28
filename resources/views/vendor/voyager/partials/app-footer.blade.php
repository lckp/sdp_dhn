<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            Produzido por <a href="https://www.marinha.mil.br/dhn" target="_blank">Diretoria de Hidrografia e Navegação</a>
        @endif
        
    </div>
</footer>
