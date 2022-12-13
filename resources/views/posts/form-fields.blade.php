
<div class="space-y-4">
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">categoria</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="categoria" type="text" value="{{ old('categoria', $post->categoria) }}">
        @error('categoria')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">nombre_producto</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="nombre_producto" type="text" value="{{ old('nombre_producto', $post->nombre_producto) }}">
        @error('nombre_producto')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">precio</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="precio" type="text" value="{{ old('precio', $post->precio) }}">
        @error('precio')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">existencia</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="existencia" type="text" value="{{ old('existencia', $post->existencia) }}">
        @error('existencia')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label> 
    <label class="flex flex-col">
        <span class="font-cambria text-slate-600 dark:text-slate-400">imagen</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="imagen" type="file" value="{{ old('imagen', $post->imagen) }}">
        @error('imagen')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label> 
    
</div>
