 <link href="<?php echo base_url(); ?>dist/css/lightgallery.css" rel="stylesheet"> 
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">Testimonials</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li>Testimonials</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->
<br /><br />
<!-- Main -->
<main class="main-container">
<div class="container" style="padding-top:30px">
	<div class="row">        
        
        
        <div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-info">
                <div class="testimonial-section">
                    It was by far one of the best training experiences that I have had. The session was perfectly planned with a blend of relevant video clips, lecture and role play activities. I am confident that the team will be able to transfer the learning back on to their job. 
                </div>
                <div class="testimonial-desc">
                    <img src="http://completepdfsolutions.com/images/avatar-user.png" alt="" />
                    <div class="testimonial-writer">
                    	<div class="testimonial-writer-name">Ketav Kshatriya</div>
                    	<div class="testimonial-writer-designation">CCM, Cargo Ford.</div>
                    </div>
                </div>
            </div>   
		</div>
		
		<div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-info">
                <div class="testimonial-section">
                    Thank you Akhilesh for an outstanding training session, the team had a great learning experience. The session was interactive and the team was kept engaged throughout. The team was comfortable and enjoyed sharing their experiences and participating in the role play activities. Thank you on behalf of the entire team of Cargo Ford.
                </div>
                <div class="testimonial-desc">
                    <img src="http://completepdfsolutions.com/images/avatar-user.png" alt="" />
                    <div class="testimonial-writer">
                    	<div class="testimonial-writer-name">Viraj Shah</div>
                    	<div class="testimonial-writer-designation">SM, Cargo Ford.</div>
                    </div>
                </div>
            </div>   
		</div>
		
       
	</div>
</div>
</main>
<!-- /Main -->
<style>
/*----------------------------------------------------*/
/*----------------- Testimonials CSS -----------------*/
/*----------------------------------------------------*/
.testimonial{
    margin-bottom: 10px;
}

    .testimonial-section {
        width: 100%;
        height: auto;
        padding: 15px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #fff;
    }
    .testimonial-section:after {
        top: 100%;
        left: 50px;
        border: solid transparent;
        content: " ";
        position: absolute;
        border-top-color: #fff;
        border-width: 15px;
        margin-left: -15px;
    }

    .testimonial-desc {
        margin-top: 20px;
        text-align:left;
        padding-left: 15px;
    }
        .testimonial-desc img {
            border: 1px solid #f5f5f5;
            border-radius: 150px;
            height: 70px;
            padding: 3px;
            width: 70px;
            display:inline-block;
            vertical-align: top;
        }

        .testimonial-writer{
            display: inline-block;
            vertical-align: top;
            padding-left: 10px;
        }

            .testimonial-writer-name{
                font-weight: bold;
            }

            .testimonial-writer-designation{
                font-size: 85%;
            }

            .testimonial-writer-company{
                font-size: 85%;
            }
    /*---- Outlined Styles ----*/
    .testimonial.testimonial-default{
        
    }
        .testimonial.testimonial-default .testimonial-section{
            border-color: #777;
        }

            .testimonial.testimonial-default .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default .testimonial-desc{
            
        }

            .testimonial.testimonial-default .testimonial-desc img{
                border-color: #777;
            }

            .testimonial.testimonial-default .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary{
        
    }
        .testimonial.testimonial-primary .testimonial-section{
            border-color: #337AB7;
            color: #286090;
            background-color: rgba(51, 122, 183, 0.1);
        }

            .testimonial.testimonial-primary .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary .testimonial-desc{
            
        }

            .testimonial.testimonial-primary .testimonial-desc img{
                border-color: #337AB7;
            }

            .testimonial.testimonial-primary .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info{
        
    }
        .testimonial.testimonial-info .testimonial-section{
            border-color: #5BC0DE;
            color: #31b0d5;
            background-color: rgba(91, 192, 222, 0.1);
        }

            .testimonial.testimonial-info .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info .testimonial-desc{
            
        }

            .testimonial.testimonial-info .testimonial-desc img{
                border-color: #5BC0DE;
            }

            .testimonial.testimonial-info .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success{
        
    }
        .testimonial.testimonial-success .testimonial-section{
            border-color: #5CB85C;
            color: #449d44;
            background-color: rgba(92, 184, 92, 0.1);
        }

            .testimonial.testimonial-success .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success .testimonial-desc{
            
        }

            .testimonial.testimonial-success .testimonial-desc img{
                border-color: #5CB85C;
            }

            .testimonial.testimonial-success .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning{
        
    }
        .testimonial.testimonial-warning .testimonial-section{
            border-color: #F0AD4E;
            color: #d58512;
            background-color: rgba(240, 173, 78, 0.1);
        }

            .testimonial.testimonial-warning .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning .testimonial-desc{
            
        }

            .testimonial.testimonial-warning .testimonial-desc img{
                border-color: #F0AD4E;
            }

            .testimonial.testimonial-warning .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger{
        
    }
        .testimonial.testimonial-danger .testimonial-section{
            border-color: #D9534F;
            color: #c9302c;
            background-color: rgba(217, 83, 79, 0.1);
        }

            .testimonial.testimonial-danger .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger .testimonial-desc{
            
        }

            .testimonial.testimonial-danger .testimonial-desc img{
                border-color: #D9534F;
            }

            .testimonial.testimonial-danger .testimonial-writer-name{
                color: #D9534F;
            }

    /*---- Filled Styles ----*/
    .testimonial.testimonial-default-filled{
        
    }
        .testimonial.testimonial-default-filled .testimonial-section{
            color: #fff;
            border-color: #777;
            background-color: #777;
        }

            .testimonial.testimonial-default-filled .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-default-filled .testimonial-desc img{
                border-color: #777;
                background-color: #777;
            }

            .testimonial.testimonial-default-filled .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary-filled{
        
    }
        .testimonial.testimonial-primary-filled .testimonial-section{
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

            .testimonial.testimonial-primary-filled .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-primary-filled .testimonial-desc img{
                border-color: #2e6da4;
                background-color: #337ab7;
            }

            .testimonial.testimonial-primary-filled .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info-filled{
        
    }
        .testimonial.testimonial-info-filled .testimonial-section{
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }

            .testimonial.testimonial-info-filled .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-info-filled .testimonial-desc img{
                border-color: #46b8da;
                background-color: #5bc0de;
            }

            .testimonial.testimonial-info-filled .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success-filled{
        
    }
        .testimonial.testimonial-success-filled .testimonial-section{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

            .testimonial.testimonial-success-filled .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-success-filled .testimonial-desc img{
                border-color: #4cae4c;
                background-color: #5cb85c;
            }

            .testimonial.testimonial-success-filled .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning-filled{
        
    }
        .testimonial.testimonial-warning-filled .testimonial-section{
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

            .testimonial.testimonial-warning-filled .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-warning-filled .testimonial-desc img{
                border-color: #eea236;
                background-color: #f0ad4e;
            }

            .testimonial.testimonial-warning-filled .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger-filled{
        
    }
        .testimonial.testimonial-danger-filled .testimonial-section{
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
        }

            .testimonial.testimonial-danger-filled .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-danger-filled .testimonial-desc img{
                border-color: #d43f3a;
                background-color: #D9534F;
            }

            .testimonial.testimonial-danger-filled .testimonial-writer-name{
                color: #D9534F;
            }
</style>

 