<div class="flex justify-between items-start">
    <div class="flex">
        <h3 class="text-base font-medium">Monto:</h3>
    </div>
    <div class="flex">
        <button onclick="fnResetAmount()" class="bg-red-600 text-white ml-2 px-2 py-1 rounded-md">Q</button>
    </div>
</div>
<div class="relative mt-6">
    <div class="flex flex-row justify-center gap-8">
        <div class="flex flex-row items-center">
            <div class="flex text-slate-700">
                <input 
                    type="text"
                    id="amount"
                    name="amount"
                    placeholder="0.00"
                    value="<?php echo $_GET['amount']; ?>"
                    class="p-2 border-1 border-gray-400 rounded-md text-right"
                />        
            </div>        
            <script>
                function fnResetAmount() {
                    document.getElementById('amount').value = "";
                }
            </script>
        </div>
    </div>
</div>