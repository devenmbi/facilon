<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('/');

// Route::middleware('auth')->group(function () {
    Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'changePassword'])->name('password.update');
// });

Route::get('coming-soon', 'App\Http\Controllers\FrontendController@coming_soon_show')->name('coming_soon_show');

Route::get('faq', 'App\Http\Controllers\FrontendController@faq_show')->name('faq_show');


Route::get('expression-of-interest', 'App\Http\Controllers\FrontendController@expression_interest_show')->name('expression_interest_show');
Route::get('markets/india', 'App\Http\Controllers\FrontendController@india_market_show')->name('india_market_show');

//Service Provider registration
Route::get('service-provider/register/step1/{provider_id?}',[App\Http\Controllers\BrokerController::class,'service_provider_registration_step1_show'])->name('service_provider_registration_step1_show');
Route::post('service-provider/register/step1/{provider_id?}',[App\Http\Controllers\BrokerController::class,'service_provider_registration_step1_submit'])->name('service_provider_registration_step1_submit');

Route::get('service-provider/register/step2/{unique_code?}',[App\Http\Controllers\BrokerController::class,'service_provider_register_step2_show'])->name('service_provider_register_step2_show');
Route::post('service-provider/register/step2/{unique_code?}',[App\Http\Controllers\BrokerController::class,'service_provider_register_step2_submit'])->name('service_provider_register_step2_submit');

Route::get('service-provider/register/step3/{unique_code?}',[App\Http\Controllers\BrokerController::class,'service_provider_step3_show'])->name('service_provider_step3_show');
Route::post('service-provider/register/step3/{unique_code?}',[App\Http\Controllers\BrokerController::class,'service_provider_step3_submit'])->name('service_provider_step3_submit');

Route::get('service-provider/register/thank-you',[App\Http\Controllers\BrokerController::class,'service_provider_register_thank_you_show'])->name('service_provider_register_thank_you_show');

//Broker registration
Route::get('broker/register/step1',[App\Http\Controllers\BrokerController::class,'broker_registration_step1_show'])->name('broker_registration_step1_show');
Route::post('broker/register/step1',[App\Http\Controllers\BrokerController::class,'broker_registration_step1_submit'])->name('broker_registration_step1_submit');

Route::get('broker/register/step2/{unique_code?}',[App\Http\Controllers\BrokerController::class,'broker_register_step2_show'])->name('broker_register_step2_show');
Route::post('broker/register/step2/{unique_code?}',[App\Http\Controllers\BrokerController::class,'broker_register_step2_submit'])->name('broker_register_step2_submit');

Route::get('broker/register/step3/{unique_code?}',[App\Http\Controllers\BrokerController::class,'broker_register_step3_show'])->name('broker_register_step3_show');
Route::post('broker/register/step3/{unique_code?}',[App\Http\Controllers\BrokerController::class,'broker_register_step3_submit'])->name('broker_register_step3_submit');

Route::get('broker/register/thank-you',[App\Http\Controllers\BrokerController::class,'broker_register_thank_you_show'])->name('broker_register_thank_you_show');


//Investor Frontend Routes
Route::get('investor/register/step1',[App\Http\Controllers\InvestorController::class,'investor_register_step1_show'])->name('investor_register_step1_show');
Route::post('investor/register/step1',[App\Http\Controllers\InvestorController::class,'investor_register_step1_submit'])->name('investor_register_step1_submit');

Route::get('investor/register/step2/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step2_show'])->name('investor_register_step2_show');

Route::get('investor/register/step1/update/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step1_update_show'])->name('investor_register_step1_update_show');

Route::post('investor/register/step1/update/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_email_mobile_update'])->name('investor_email_mobile_update');

Route::post('investor/register/step2/verify-otp',[App\Http\Controllers\InvestorController::class,'investor_register_step2_verify_otp'])->name('investor_register_step2_verify_otp');

Route::get('investor/register/step3/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step3_show'])->name('investor_register_step3_show');
Route::post('investor/register/step3/enter_full_name',[App\Http\Controllers\InvestorController::class,'investor_register_step3_enter_full_name'])->name('investor_register_step3_enter_full_name');

Route::get('investor/register/step4/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step4_show'])->name('investor_register_step4_show');
Route::post('investor/register/step4/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step4_insert_data'])->name('investor_register_step4_insert_data');

Route::get('investor/register/step2/resend/otp/{unique_code?}',[App\Http\Controllers\InvestorController::class,'investor_register_step2_resend_otp'])->name('investor_register_step2_resend_otp');

Route::get('investor/register/thank-you',[App\Http\Controllers\InvestorController::class,'investor_register_thank_you_show'])->name('investor_register_thank_you_show');

Auth::routes();
Route::get('admin/login',[App\Http\Controllers\AdminController::class,'login_form'])->name('login.form');
Route::post('login-functionality',[App\Http\Controllers\AdminController::class,'login_functionality'])->name('login.functionality');
Route::group(['middleware'=>'admin'],function(){
    
    Route::get('logout',[App\Http\Controllers\AdminController::class,'logout'])->name('logout');
    Route::get('dashboard',[App\Http\Controllers\AdminController::class,'dashboard_show'])->name('dashboard_show');

    //  Custody - Basic Details
    Route::get('custody-basic-details',[App\Http\Controllers\AdminController::class,'view_custody_basic_details'])->name('admin.view_custody_basic_details');
    Route::post('custody-basic-details-form',[App\Http\Controllers\AdminController::class,'update_custody_basic_details'])->name('admin.update_custody_basic_details');

    //  Custody - Services
    Route::get('list-custody-services',[App\Http\Controllers\AdminController::class,'list_custody_services'])->name('admin.list_custody_services');
    Route::get('add-custody-service',[App\Http\Controllers\AdminController::class,'view_add_custody_service'])->name('admin.view_add_custody_service');
    Route::post('add-custody-service-form',[App\Http\Controllers\AdminController::class,'add_custody_service'])->name('admin.add_custody_service');
    Route::get('edit-custody-service/{id?}',[App\Http\Controllers\AdminController::class,'view_custody_service_details'])->name('admin.view_custody_service_details');
    Route::post('edit-custody-service-form',[App\Http\Controllers\AdminController::class,'edit_custody_service'])->name('admin.edit_custody_service');
    Route::get('delete-custody-service/{id?}',[App\Http\Controllers\AdminController::class,'delete_custody_service'])->name('admin.delete_custody_service');
    Route::get('deactivate-custody-service/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_custody_service'])->name('admin.deactivate_custody_service');
    Route::get('activate-custody-service/{id?}',[App\Http\Controllers\AdminController::class,'activate_custody_service'])->name('admin.activate_custody_service');

    //  Derivatives Trading - Basic Details
    Route::get('derivatives-trading-basic-details',[App\Http\Controllers\AdminController::class,'view_derivatives_trading_basic_details'])->name('admin.view_derivatives_trading_basic_details');
    Route::post('derivatives-trading-basic-details-form',[App\Http\Controllers\AdminController::class,'update_derivatives_trading_basic_details'])->name('admin.update_derivatives_trading_basic_details');

    //  Derivatives Trading - Services
    Route::get('list-derivatives-trading-services',[App\Http\Controllers\AdminController::class,'list_derivatives_trading_services'])->name('admin.list_derivatives_trading_services');
    Route::get('add-derivatives-trading-service',[App\Http\Controllers\AdminController::class,'view_add_derivatives_trading_service'])->name('admin.view_add_derivatives_trading_service');
    Route::post('add-derivatives-trading-service-form',[App\Http\Controllers\AdminController::class,'add_derivatives_trading_service'])->name('admin.add_derivatives_trading_service');
    Route::get('edit-derivatives-trading-service/{id?}',[App\Http\Controllers\AdminController::class,'view_derivatives_trading_service_details'])->name('admin.view_derivatives_trading_service_details');
    Route::post('edit-derivatives-trading-service-form',[App\Http\Controllers\AdminController::class,'edit_derivatives_trading_service'])->name('admin.edit_derivatives_trading_service');
    Route::get('delete-derivatives-trading-service/{id?}',[App\Http\Controllers\AdminController::class,'delete_derivatives_trading_service'])->name('admin.delete_derivatives_trading_service');
    Route::get('deactivate-derivatives-trading-service/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_derivatives_trading_service'])->name('admin.deactivate_derivatives_trading_service');
    Route::get('activate-derivatives-trading-service/{id?}',[App\Http\Controllers\AdminController::class,'activate_derivatives_trading_service'])->name('admin.activate_derivatives_trading_service');

    //  Derivatives Trading - Types Of Derivatives
    Route::get('list-types-of-derivatives',[App\Http\Controllers\AdminController::class,'list_types_of_derivatives'])->name('admin.list_types_of_derivatives');
    Route::get('add-type-of-derivatives',[App\Http\Controllers\AdminController::class,'view_add_type_of_derivative'])->name('admin.view_add_type_of_derivative');
    Route::post('add-type-of-derivatives-form',[App\Http\Controllers\AdminController::class,'add_type_of_derivative'])->name('admin.add_type_of_derivative');
    Route::get('edit-type-of-derivatives/{id?}',[App\Http\Controllers\AdminController::class,'view_type_of_derivative_details'])->name('admin.view_type_of_derivative_details');
    Route::post('edit-type-of-derivatives-form',[App\Http\Controllers\AdminController::class,'edit_type_of_derivative'])->name('admin.edit_type_of_derivative');
    Route::get('delete-type-of-derivatives/{id?}',[App\Http\Controllers\AdminController::class,'delete_type_of_derivative'])->name('admin.delete_type_of_derivative');
    Route::get('deactivate-type-of-derivatives/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_type_of_derivative'])->name('admin.deactivate_type_of_derivative');
    Route::get('activate-type-of-derivatives/{id?}',[App\Http\Controllers\AdminController::class,'activate_type_of_derivative'])->name('admin.activate_type_of_derivative');

    //  Portfolio Investment Scheme - Basic Details
    Route::get('portfolio-investment-scheme-basic-details',[App\Http\Controllers\AdminController::class,'view_portfolio_investment_scheme_basic_details'])->name('admin.view_portfolio_investment_scheme_basic_details');
    Route::post('portfolio-investment-scheme-basic-details-form',[App\Http\Controllers\AdminController::class,'update_portfolio_investment_scheme_basic_details'])->name('admin.update_portfolio_investment_scheme_basic_details');

    //  Portfolio Investment Scheme - Services
    Route::get('list-portfolio-investment-scheme-services',[App\Http\Controllers\AdminController::class,'list_portfolio_investment_scheme_services'])->name('admin.list_portfolio_investment_scheme_services');
    Route::get('add-portfolio-investment-scheme-service',[App\Http\Controllers\AdminController::class,'view_add_portfolio_investment_scheme_service'])->name('admin.view_add_portfolio_investment_scheme_service');
    Route::post('add-portfolio-investment-scheme-service-form',[App\Http\Controllers\AdminController::class,'add_portfolio_investment_scheme_service'])->name('admin.add_portfolio_investment_scheme_service');
    Route::get('edit-portfolio-investment-scheme-service/{id?}',[App\Http\Controllers\AdminController::class,'view_portfolio_investment_scheme_service_details'])->name('admin.view_portfolio_investment_scheme_service_details');
    Route::post('edit-portfolio-investment-scheme-service-form',[App\Http\Controllers\AdminController::class,'edit_portfolio_investment_scheme_service'])->name('admin.edit_portfolio_investment_scheme_service');
    Route::get('delete-portfolio-investment-scheme-service/{id?}',[App\Http\Controllers\AdminController::class,'delete_portfolio_investment_scheme_service'])->name('admin.delete_portfolio_investment_scheme_service');
    Route::get('deactivate-portfolio-investment-scheme-service/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_portfolio_investment_scheme_service'])->name('admin.deactivate_portfolio_investment_scheme_service');
    Route::get('activate-portfolio-investment-scheme-service/{id?}',[App\Http\Controllers\AdminController::class,'activate_portfolio_investment_scheme_service'])->name('admin.activate_portfolio_investment_scheme_service');

    //  Portfolio Management Services - Basic Details
    Route::get('portfolio-management-services-basic-details',[App\Http\Controllers\AdminController::class,'view_portfolio_management_services_basic_details'])->name('admin.view_portfolio_management_services_basic_details');
    Route::post('portfolio-management-services-basic-details-form',[App\Http\Controllers\AdminController::class,'update_portfolio_management_services_basic_details'])->name('admin.update_portfolio_management_services_basic_details');

    //  Portfolio Management Services - Services
    Route::get('list-portfolio-management-services',[App\Http\Controllers\AdminController::class,'list_portfolio_management_services'])->name('admin.list_portfolio_management_services');
    Route::get('add-portfolio-management-service',[App\Http\Controllers\AdminController::class,'view_add_portfolio_management_service'])->name('admin.view_add_portfolio_management_service');
    Route::post('add-portfolio-management-service-form',[App\Http\Controllers\AdminController::class,'add_portfolio_management_service'])->name('admin.add_portfolio_management_service');
    Route::get('edit-portfolio-management-service/{id?}',[App\Http\Controllers\AdminController::class,'view_portfolio_management_service_details'])->name('admin.view_portfolio_management_service_details');
    Route::post('edit-portfolio-management-service-form',[App\Http\Controllers\AdminController::class,'edit_portfolio_management_service'])->name('admin.edit_portfolio_management_service');
    Route::get('delete-portfolio-management-service/{id?}',[App\Http\Controllers\AdminController::class,'delete_portfolio_management_service'])->name('admin.delete_portfolio_management_service');
    Route::get('deactivate-portfolio-management-service/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_portfolio_management_service'])->name('admin.deactivate_portfolio_management_service');
    Route::get('activate-portfolio-management-service/{id?}',[App\Http\Controllers\AdminController::class,'activate_portfolio_management_service'])->name('admin.activate_portfolio_management_service');

    //  Trading In Listed Securities - Basic Details
    Route::get('trading-listed-securities-basic-details',[App\Http\Controllers\AdminController::class,'view_trading_listed_securities_basic_details'])->name('admin.view_trading_listed_securities_basic_details');
    Route::post('trading-listed-securities-basic-details-form',[App\Http\Controllers\AdminController::class,'update_trading_listed_securities_basic_details'])->name('admin.update_trading_listed_securities_basic_details');

    //  Trading In Listed Securities - Services
    Route::get('list-trading-listed-securities-services',[App\Http\Controllers\AdminController::class,'list_trading_listed_securities_services'])->name('admin.list_trading_listed_securities_services');
    Route::get('add-trading-listed-securities-service',[App\Http\Controllers\AdminController::class,'view_add_trading_listed_securities_service'])->name('admin.view_add_trading_listed_securities_service');
    Route::post('add-trading-listed-securities-service-form',[App\Http\Controllers\AdminController::class,'add_trading_listed_securities_service'])->name('admin.add_trading_listed_securities_service');
    Route::get('edit-trading-listed-securities-service/{id?}',[App\Http\Controllers\AdminController::class,'view_trading_listed_securities_service_details'])->name('admin.view_trading_listed_securities_service_details');
    Route::post('edit-trading-listed-securities-service-form',[App\Http\Controllers\AdminController::class,'edit_trading_listed_securities_service'])->name('admin.edit_trading_listed_securities_service');
    Route::get('delete-trading-listed-securities-service/{id?}',[App\Http\Controllers\AdminController::class,'delete_trading_listed_securities_service'])->name('admin.delete_trading_listed_securities_service');
    Route::get('deactivate-trading-listed-securities-service/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_trading_listed_securities_service'])->name('admin.deactivate_trading_listed_securities_service');
    Route::get('activate-trading-listed-securities-service/{id?}',[App\Http\Controllers\AdminController::class,'activate_trading_listed_securities_service'])->name('admin.activate_trading_listed_securities_service');

    //  Service Providers
    Route::get('list-service-providers',[App\Http\Controllers\AdminController::class,'list_service_providers'])->name('admin.list_service_providers');
    Route::get('add-service-provider',[App\Http\Controllers\AdminController::class,'view_add_service_provider'])->name('admin.view_add_service_provider');
    Route::post('add-service-provider-form',[App\Http\Controllers\AdminController::class,'add_service_provider'])->name('admin.add_service_provider');
    Route::get('edit-service-provider/{id?}',[App\Http\Controllers\AdminController::class,'view_service_provider_details'])->name('admin.view_service_provider_details');
    Route::post('edit-service-provider-form',[App\Http\Controllers\AdminController::class,'edit_service_provider'])->name('admin.edit_service_provider');
    Route::get('delete-service-provider/{id?}',[App\Http\Controllers\AdminController::class,'delete_service_provider'])->name('admin.delete_service_provider');
    Route::get('deactivate-service-provider/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_service_provider'])->name('admin.deactivate_service_provider');
    Route::get('activate-service-provider/{id?}',[App\Http\Controllers\AdminController::class,'activate_service_provider'])->name('admin.activate_service_provider');
    
    //service providers registration list
    Route::get('regitstration/service-provider/{provider_id?}',[App\Http\Controllers\AdminController::class,'get_service_provider_registration_list'])->name('admin.get_service_provider_registration_list');
    
    //  Home - Banner Details
    Route::get('banner-details',[App\Http\Controllers\AdminController::class,'view_banner_details'])->name('admin.view_banner_details');
    Route::post('banner-details-form',[App\Http\Controllers\AdminController::class,'update_banner_details'])->name('admin.update_banner_details');

    //  Home - Journey With Facilon
    Route::get('list-key-points',[App\Http\Controllers\AdminController::class,'list_key_points'])->name('admin.list_key_points');
    Route::get('add-key-point',[App\Http\Controllers\AdminController::class,'view_add_key_point'])->name('admin.view_add_key_point');
    Route::post('add-key-point-form',[App\Http\Controllers\AdminController::class,'add_key_point'])->name('admin.add_key_point');
    Route::get('edit-key-point/{id?}',[App\Http\Controllers\AdminController::class,'view_key_point_details'])->name('admin.view_key_point_details');
    Route::post('edit-key-point-form',[App\Http\Controllers\AdminController::class,'edit_key_point'])->name('admin.edit_key_point');
    Route::get('delete-key-point/{id?}',[App\Http\Controllers\AdminController::class,'delete_key_point'])->name('admin.delete_key_point');
    Route::get('deactivate-key-point/{id?}',[App\Http\Controllers\AdminController::class,'deactivate_key_point'])->name('admin.deactivate_key_point');
    Route::get('activate-key-point/{id?}',[App\Http\Controllers\AdminController::class,'activate_key_point'])->name('admin.activate_key_point');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/password/update',[App\Http\Controllers\HomeController::class,'first_time_password_change'])->name('first_time_password_change');

//  Custody
Route::get('custody', [App\Http\Controllers\FrontendController::class, 'custody'])->name('custody');

//  Derivatives Trading
Route::get('derivatives-trading', [App\Http\Controllers\FrontendController::class, 'derivatives_trading'])->name('derivatives_trading');

//  Portfolio Investment Scheme
Route::get('portfolio-investment-scheme', [App\Http\Controllers\FrontendController::class, 'portfolio_investment_scheme'])->name('portfolio_investment_scheme');

//  Portfolio Management Services
Route::get('portfolio-management-services', [App\Http\Controllers\FrontendController::class, 'portfolio_management_services'])->name('portfolio_management_services');

//  Trading in Listed Securities
Route::get('trading-listed-securities', [App\Http\Controllers\FrontendController::class, 'trading_listed_securities'])->name('trading_listed_securities');

//  Service Providers
Route::get('service-providers', [App\Http\Controllers\FrontendController::class, 'service_providers'])->name('service_providers');
