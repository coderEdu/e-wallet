<div class="flex flex-row justify-between items-center">
    <div class="flex text-slate-700">
        <input 
            type="text"
            id="concept"
            name="concept"
            placeholder="Palabra o frase"
            value="<?php echo $_GET['concept']; ?>"
            class="p-2 border-1 border-gray-400 rounded-md text-right"
        />        
    </div>
    <div class="flex">
        <button onclick="fnResetConcept()" class="bg-red-600 text-white ml-2 px-2 py-1 rounded-md">Q</button>
    </div>

    <script>
        function fnResetConcept() {
            document.getElementById('concept').value = "";
        }
    </script>
</div>