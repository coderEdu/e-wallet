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