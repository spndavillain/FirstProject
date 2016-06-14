$(document).ready(function(){


      /////////////////////////////////////////////////////////
      ////////// CLICKING ON THE ADDNEWS BUTTON ///////////////
      /////////////////////////////////////////////////////////
                                                               
      $('#addNews').on('click', function(){                    
                                                               
          $('.addNewsTab').show();                             
           $('.nav-tabs a[href="#menu1"]').tab('show');        
           $('#addNews').toggle();                             
                                                               
      });                                                      
                                                               
      /////////////////////////////////////////////////////////
      ////////// CLICKING ON THE LIST OF NEWS TAB /////////////
      /////////////////////////////////////////////////////////
                                                               
      $('.homeTab').on('click', function(){                    
                                                               
          $('#addNews').show();                                
          $('.addNewsTab').hide();                             
          $('.previewTab').hide();                             
          $('.editTab').hide();                                
      });                                                      
                                                               
                                                              
      /////////////////////////////////////////////////////////
      ////////////// SHOWING THE PREVIEW TABS /////////////////
      /////////////////////////////////////////////////////////
                                                               
                                                               
      $('.preview-link').on('click', function(){               
                                                               
          $('#addNews').hide();                                
          $('.addNewsTab').hide();                             
          $('.previewTab').show();                             
          $('.nav-tabs a[href="#menu2"]').tab('show');         
          var action = $(this).data('action');                 
                                                               
          $.ajax({                                             
              url : action,                                    
              method : 'GET',                                  
              success : function(response){                    
                  $('.preview-tab').html(response);            
              }                                                
          });                                                  
                                                               
      });                                                       
                                                               
      //////////////////////////////////////////////////////////
      ////////////// SHOWING THE EDIT TABS /////////////////////
      //////////////////////////////////////////////////////////
                                                                
      $('.edit-link').on('click', function(){                   
                                                                
                                                                
          $('#addNews').hide();                                 
          $('.editTab').show();                                 
          $('.nav-tabs a[href="#menu3"]').tab('show');          
          var action = $(this).data('action');                  
                                                                
          $.ajax({                                              
              url : action,                                     
              method : 'GET',                                   
              success : function(response){                     
                  $('.edit-tab').html(response);                
              }                                                 
          });                                                   
                                                                
      });                                                       
                                                                
      //////////////////////////////////////////////////////////
      ////////////// SEARCHING AND DISPLAY WITH AJAX ///////////
      //////////////////////////////////////////////////////////
                                                                
                                                                
      $('.submit-search').on('click', function(){               
                                                                
          var form = $('.form-search');                         
                                                                
          $.ajax({                                              
              url : form.attr('action'),                        
              data : form.serialize(),                          
              method : 'POST',                                  
              success : function(response){                     
                  $('.search-result').html(response);           
              }                                                 
          });
      });
      //////////////////////////////////////////////////////////
      ////////Preview Should Display on Tab not next page///////
      //////////////////////////////////////////////////////////
      $('.submit-search').on('click', function(){
        
          var form = $('.form-search');

          $.ajax({
              url : form.attr('action'),
              data : form.serialize(),
              method : 'POST',
              success : function(response){
                  $('.search-result').html(response);
              }
          });
      });

      //////////////////////////////////////////////////////////
      /////////// Deleting and Displaying the result ///////////
      //////////////////////////////////////////////////////////


      $('.delete-link').on('click', function(){
          
          var action = $(this).data('action');

          $.ajax({
              url : action,
              method : 'GET',
              success : function(response){
                  $('.delete').html(response);
              }
          });

      });
      

      
});