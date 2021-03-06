<div class="page-footer">
        <div class="page-footer-inner">
             2018 &copy; Chuppy by DarkInnocent.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/datatables/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('global/scripts/metronic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/chupy-alert-behaviour.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/chupy-message-behaviour.js') }}" type="text/javascript" ></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {    
           Metronic.init(); // init metronic core componets
           Layout.init(); // init layout

           $(function(){
            $("[data-hide]").on("click", function(){
                $(this).closest("." + $(this).attr("data-hide")).removeClass("show");
            });
          });
         
        });

        let button = document.querySelectorAll('.chupy-message button[data-close]')

        button.forEach(function(item){
        item.addEventListener("click", chupyMessageClose)
        })

        function chupyMessageClose(){
        let target = this.getAttribute('data-close')
        let targetElement = document.querySelector('#'+target)
        targetElement.classList.toggle('show', false)
        setTimeout(function(){
            targetElement.classList.toggle('hide',true)
        }, 500)
        }
    </script>