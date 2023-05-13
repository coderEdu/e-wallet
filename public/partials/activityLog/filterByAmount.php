<div class="flex flex-row items-center">
    <div class="flex text-slate-700">
        <input 
            type="text"
            id="amount"
            name="amount"
            placeholder="$ 0.00"
            value="<?php echo (isset($_GET['amount']) ? $_GET['amount'] : ''); ?>"
            class="p-2 border-1 border-gray-400 rounded-md text-right"
        />        
    </div>        
    <script>
        function resetAmount() {
            document.getElementById('amount').value = "";
        }
    </script>
</div>