<div class="flex justify-between items-start">
    <div class="flex">
        <h3 class="text-base font-medium">Concepto:</h3>
    </div>
    <div class="flex">
        <button onclick="fnResetConcept()" class="bg-red-600 text-xs sm:text-sm text-white ml-2 px-2 py-1 rounded-md">Q</button>
    </div>
</div>
<div class="relative mt-6">
    <div class="flex flex-row justify-center gap-8">
        <div class="flex flex-row items-center">
            <div class="flex text-slate-700">
                <input 
                    type="text"
                    id="concept"
                    name="concept"
                    placeholder="Palabra o frase"
                    value="<?php echo (isset($_GET['concept']) ? $_GET['concept'] : ''); ?>"
                    class="p-2 border-1 border-gray-400 rounded-md"
                />        
            </div>        
            <script>
                function fnResetConcept() {
                    document.getElementById('concept').value = "";
                }
            </script>
        </div>
    </div>
</div>