<?php 
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Kordy\Ticketit\Requests\PrepareConfigurationStoreRequest;
use Kordy\Ticketit\Requests\PrepareConfigurationUpdateRequest;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Configuration;
use Illuminate\Support\Facades\Session;

class ConfigurationsController extends Controller
{

  /**
   * Display a listing of the Setting.
   *
   * @return Response
   */
  public function index()
  {
    $configurations = Configuration::paginate(5);
    return view('ticketit::admin.configuration.index', compact('configurations'));
  }

  /**
   * Show the form for creating a new Setting.
   *
   * @return Response
   */
  public function create()
  {
    return view('ticketit::admin.configuration.create');
  }

  /**
   * Store a newly created Configuration in storage.
   *
   * @param PrepareConfigurationStoreRequest $request
   *
   * @return Response
   */
  public function store(PrepareConfigurationStoreRequest $request)
  {
    $input = $request->all();
    
    $configuration = new Configuration;
    $configuration->create($input);   

    Session::flash('configuration', 'Setting saved successfully.');

    return redirect()->action('\Kordy\Ticketit\Controllers\ConfigurationsController@index');
  }

  /**
   * Show the form for editing the specified Configuration.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {   
    $configuration = Configuration::findOrFail($id);
    return view('ticketit::admin.configuration.edit', compact('configuration'));
  }

  /**
   * Update the specified Configuration in storage.
   *
   * @param  int              $id
   * @param PrepareConfigurationUpdateRequest $request
   *
   * @return Response
   */
  public function update(PrepareConfigurationUpdateRequest $request, $id)
  {
    $configuration = Configuration::findOrFail($id);
    $configuration->update(['value' => $request->value, 'lang' => $request->lang]);    
    
    Session::flash('configuration', trans('ticketit::lang.configuration-name-has-been-modified', ['name' => $request->name]));   
    
    //return redirect(route('ticketit::admin.configuration.index'));
    return redirect()->action('\Kordy\Ticketit\Controllers\ConfigurationsController@index');
  }

}