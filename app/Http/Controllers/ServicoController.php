<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;

class ServicoController extends Controller
{
    /**
     * Lista os Serviços
     *
     * @return view
     **/
    public function index()
    {
        $servicos = Servico::paginate(10);

        return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * From de create de serviço
     *
     * @return view
     */
    public function create() 
    {
        return view('servicos.create');
    }

    /**
     * Insert de serviço
     *
     * @param ServicoRequest $request
     * @return void
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');

        Servico::create($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com sucesso');
    }

    /**
     * View de edit de serviço
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Update de um unico registro
     *
     * @param integer $id
     * @param ServicoRequest $request
     * @return void
     */
    public function update(int $id, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);
        
        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com sucesso');
    }
}
