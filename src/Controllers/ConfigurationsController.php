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
    $configurations = Configuration::all();
    $configurations_by_sections = [];
    $init_section = ['main_route', 'admin_route', 'master_template'];
    $email_section = ['status_notification', 'comment_notification', 'queue_emails', 'assigned_notification',
        'email.template', 'email.header', 'email.signoff', 'email.signature', 'email.dashboard',
        'email.google_plus_link','email.facebook_link','email.twitter_link','email.footer','email.footer_link',
        'email.color_body_bg','email.color_header_bg','email.color_content_bg','email.color_footer_bg',
        'email.color_button_bg'];
      $tickets_section = ['default_status_id', 'default_close_status_id', 'default_reopen_status_id', 'paginate_items'];
      $perms_section = ['admin_ids', 'agent_restrict', 'close_ticket_perm', 'reopen_ticket_perm'];
    // Split them into configurations sections for tabs
    foreach($configurations as $config_item) {
        if (in_array($config_item->slug, $init_section))
            $configurations_by_sections['init'][] = $config_item;
        elseif (in_array($config_item->slug, $email_section))
            $configurations_by_sections['email'][] = $config_item;
        elseif (in_array($config_item->slug, $tickets_section))
            $configurations_by_sections['tickets'][] = $config_item;
        elseif (in_array($config_item->slug, $perms_section))
            $configurations_by_sections['perms'][] = $config_item;
        else
            $configurations_by_sections['other'][] = $config_item;
    }
    return view('ticketit::admin.configuration.index', compact('configurations', 'configurations_by_sections'));
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