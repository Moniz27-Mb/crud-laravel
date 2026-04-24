@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; font-family: 'Segoe UI', sans-serif;">

    <div style="background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); padding: 40px;">
        
        <h1 style="color: #2d3748; font-size: 24px; margin-bottom: 30px;">➕ Criar Produto</h1>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Nome</label>
                <input type="text" name="nome" required
                       style="width: 100%; padding: 10px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Descrição</label>
                <textarea name="descricao" rows="4" required
                          style="width: 100%; padding: 10px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; box-sizing: border-box;"></textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Preço (Kz)</label>
                <input type="number" name="preco" step="0.01" required
                       style="width: 100%; padding: 10px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 30px;">
                <label style="display: block; color: #4a5568; font-weight: 600; margin-bottom: 8px;">Quantidade</label>
                <input type="number" name="quantidade" required
                       style="width: 100%; padding: 10px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="display: flex; justify-content: space-between;">
                <a href="{{ route('produtos.index') }}"
                   style="background: #718096; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
                    Voltar
                </a>
                <button type="submit"
                        style="background: #4f46e5; color: white; padding: 10px 20px; border-radius: 8px; border: none; font-weight: bold; cursor: pointer;">
                    Guardar Produto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
