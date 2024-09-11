<x-app-layout>
    <div class="py-12 bg-[#e9f3f2]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Embed Tableau Visualization -->
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class='tableauPlaceholder' id='viz1726076207150' style='position: relative'>
                    <noscript>
                        <a href='#'>
                            <img alt='Jejak ' src='https://public.tableau.com/static/images/Da/Dashboard_17260759846050/Jejak/1_rss.png' style='border: none' />
                        </a>
                    </noscript>
                    <object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='name' value='Dashboard_17260759846050/Jejak' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image' value='https://public.tableau.com/static/images/Da/Dashboard_17260759846050/Jejak/1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='en-GB' />
                        <param name='filter' value='publish=yes' />
                    </object>
                </div>
            </div>

            <script type='text/javascript'>
                var divElement = document.getElementById('viz1726076207150');
                var vizElement = divElement.getElementsByTagName('object')[0];
                if (divElement.offsetWidth > 800) {
                    vizElement.style.width = '1200px';
                    vizElement.style.height = '827px';
                } else if (divElement.offsetWidth > 500) {
                    vizElement.style.width = '1200px';
                    vizElement.style.height = '827px';
                } else {
                    vizElement.style.width = '100%';
                    vizElement.style.height = '1777px';
                }
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
    </div>
</x-app-layout>
