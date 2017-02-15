todo
====

A Symfony project created on February 15, 2017, 6:06 pm.

### Interest for me

1.- Start server: php app/console server:run

2.- Download repository and install in other machine

* Clone repository and execute 'sudo composer install' (First asign read/write permissions)

3.- How to view our app all routes:

**php app/console debug:router** 
 -------------------------- -------- -------- ------ -----------------------------------
  Name                       Method   Scheme   Host   Path                               
 -------------------------- -------- -------- ------ -----------------------------------
  _wdt                       ANY      ANY      ANY    /_wdt/{token}                      
  _profiler_home             ANY      ANY      ANY    /_profiler/                        
  _profiler_search           ANY      ANY      ANY    /_profiler/search                  
  _profiler_search_bar       ANY      ANY      ANY    /_profiler/search_bar              
  _profiler_purge            ANY      ANY      ANY    /_profiler/purge                   
  _profiler_info             ANY      ANY      ANY    /_profiler/info/{about}            
  _profiler_phpinfo          ANY      ANY      ANY    /_profiler/phpinfo                 
  _profiler_search_results   ANY      ANY      ANY    /_profiler/{token}/search/results  
  _profiler                  ANY      ANY      ANY    /_profiler/{token}                 
  _profiler_router           ANY      ANY      ANY    /_profiler/{token}/router          
  _profiler_exception        ANY      ANY      ANY    /_profiler/{token}/exception       
  _profiler_exception_css    ANY      ANY      ANY    /_profiler/{token}/exception.css   
  _twig_error_test           ANY      ANY      ANY    /_error/{code}.{_format}           
  aml_user_homepage          ANY      ANY      ANY    /                                  
  aml_user_hello             ANY      ANY      ANY    /hello/{name}                      
  aml_user_index             ANY      ANY      ANY    /user/index                        
  aml_user_index_select      ANY      ANY      ANY    /user/index/{id}                   
  aml_user_articles          ANY      ANY      ANY    /user/articles/{page}              
  aml_user_add               ANY      ANY      ANY    /user/add                          
  aml_user_edit              ANY      ANY      ANY    /user/edit/{id}                    
  aml_user_view              ANY      ANY      ANY    /user/view/{id}                    
  aml_user_delete            ANY      ANY      ANY    /user/delete/{id}                  
  homepage                   ANY      ANY      ANY    /                                  
 -------------------------- -------- -------- ------ -----------------------------------

### Errors and solutions

1.- Warning: date_default_timezone_get() installing Symfony

`[Symfony\Component\Debug\Exception\ContextErrorException]                                     Warning: date_default_timezone_get(): It is not safe to rely on the system's timezone settings.
You are *required* to use the date.timezone setting or the date_default_timezone_set() function.
In case you used any of those methods and you are still getting this warning, you most likely
misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set
date.timezone to select your timezone. in `

http://stackoverflow.com/a/24251897
