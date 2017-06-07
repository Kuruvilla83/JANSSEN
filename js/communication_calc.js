function updatescores(val)
{
var cnt=0;
var ovlper=0;
//////////////Sub Category1//////////////////////

var sub_tot1=0;
if (document.cmmn_frm.q1.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q1.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q2.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q2.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q3.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q3.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q4.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q4.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q5.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q5.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q6.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q6.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q7.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q7.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q8.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q8.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q9.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q9.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q10.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q10.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q11.value!='NA')
{
	sub_tot1=sub_tot1+parseInt(document.cmmn_frm.q11.value);
	cnt=cnt+1;
}

max_score=4*cnt;
tot_per1=(sub_tot1/max_score)*100;



if(isNaN(tot_per1)==true)
{
	document.getElementById('sub_tot1').innerHTML='NA';
	document.getElementById('summary1').innerHTML='NA';
	document.cmmn_frm.callflw_hf.value='NA';
	tot_per1='NA';
	
	
}
else
{
	document.getElementById('sub_tot1').innerHTML=tot_per1.toPrecision(3);
	document.getElementById('summary1').innerHTML=tot_per1.toPrecision(3);
	document.cmmn_frm.callflw_hf.value=tot_per1.toPrecision(3);
}


//////////////Sub Category2//////////////////////


var cnt=0;
var sub_tot2=0;
if (document.cmmn_frm.q12.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q12.value);
	cnt=cnt+1;
}

if (document.cmmn_frm.q13.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q13.value);
	cnt=cnt+1;
}

if (document.cmmn_frm.q14.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q14.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q15.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q15.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q16.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q16.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q17.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q17.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q18.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q18.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q19.value!='NA')
{
	sub_tot2=sub_tot2+parseInt(document.cmmn_frm.q19.value);
	cnt=cnt+1;
}

max_score=4*cnt;
tot_per2=(sub_tot2/max_score)*100;
if(isNaN(tot_per2)==true)
{
	document.getElementById('sub_tot2').innerHTML='NA';
	document.getElementById('summary2').innerHTML='NA';
	document.cmmn_frm.submtr_hf.value='NA';
	tot_per2='NA';
	

}
else
{
	document.getElementById('sub_tot2').innerHTML=tot_per2.toPrecision(3);
	document.getElementById('summary2').innerHTML=tot_per2.toPrecision(3);
	document.cmmn_frm.submtr_hf.value=tot_per2.toPrecision(3);
}


//////////////Sub Category3//////////////////////

var cnt=0;
var sub_tot3=0;
if (document.cmmn_frm.q20.value!='NA')
{
	sub_tot3=sub_tot3+parseInt(document.cmmn_frm.q20.value);
	cnt=cnt+1;
}

if (document.cmmn_frm.q21.value!='NA')
{
	sub_tot3=sub_tot3+parseInt(document.cmmn_frm.q21.value);
	cnt=cnt+1;
}

if (document.cmmn_frm.q22.value!='NA')
{
	sub_tot3=sub_tot3+parseInt(document.cmmn_frm.q22.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q23.value!='NA')
{
	sub_tot3=sub_tot3+parseInt(document.cmmn_frm.q23.value);
	cnt=cnt+1;
}
if (document.cmmn_frm.q24.value!='NA')
{
	sub_tot3=sub_tot3+parseInt(document.cmmn_frm.q24.value);
	cnt=cnt+1;
}

max_score=4*cnt;
tot_per3=(sub_tot3/max_score)*100;
if(isNaN(tot_per3)==true)
{
   
	document.getElementById('sub_tot3').innerHTML='NA';
	document.getElementById('summary3').innerHTML='NA';
	 document.cmmn_frm.custinf_hf.value='NA';
	tot_per3='NA';
	
}
else
{
    
	document.getElementById('sub_tot3').innerHTML=tot_per3.toPrecision(3);
	document.getElementById('summary3').innerHTML=tot_per3.toPrecision(3);
	document.cmmn_frm.custinf_hf.value=tot_per3.toPrecision(3);
}

///////////////////////////////////////////////////////

var tot_cnt=0;
var ovl_tot=0;
if (isNaN(tot_per1)!=true)
{
	tot_cnt=tot_cnt+1;
	ovl_tot=ovl_tot+tot_per1;
}
if (isNaN(tot_per2)!=true)
{
	tot_cnt=tot_cnt+1;
	ovl_tot=ovl_tot+tot_per2;
}
if (isNaN(tot_per3)!=true)
{
	tot_cnt=tot_cnt+1;
	ovl_tot=ovl_tot+tot_per3;
}

//ovlper=tot_cnt==0?'NA':ovl_tot/tot_cnt;

if (tot_cnt==0)
{
	document.getElementById('ovlper').innerHTML='NA';
	document.cmmn_frm.overscr_hf.value='NA';
	ovlper='NA';
}
else
{
	//alert(tot_cnt);
	ovlper=ovl_tot/tot_cnt;
	document.getElementById('ovlper').innerHTML=ovlper.toPrecision(3);
	document.cmmn_frm.overscr_hf.value=ovlper.toPrecision(3);
}
window.status=ovlper;


	cmmn_frm.qhf1.value=cmmn_frm.q1.options[cmmn_frm.q1.selectedIndex].text;
	cmmn_frm.qhf2.value=cmmn_frm.q2.options[cmmn_frm.q2.selectedIndex].text;
	cmmn_frm.qhf3.value=cmmn_frm.q3.options[cmmn_frm.q3.selectedIndex].text;
	cmmn_frm.qhf4.value=cmmn_frm.q4.options[cmmn_frm.q4.selectedIndex].text;
	cmmn_frm.qhf5.value=cmmn_frm.q5.options[cmmn_frm.q5.selectedIndex].text;
	cmmn_frm.qhf6.value=cmmn_frm.q6.options[cmmn_frm.q6.selectedIndex].text;
	cmmn_frm.qhf7.value=cmmn_frm.q7.options[cmmn_frm.q7.selectedIndex].text;
	cmmn_frm.qhf8.value=cmmn_frm.q8.options[cmmn_frm.q8.selectedIndex].text;
	cmmn_frm.qhf9.value=cmmn_frm.q9.options[cmmn_frm.q9.selectedIndex].text;
	cmmn_frm.qhf10.value=cmmn_frm.q10.options[cmmn_frm.q10.selectedIndex].text;
	cmmn_frm.qhf11.value=cmmn_frm.q11.options[cmmn_frm.q11.selectedIndex].text;
	cmmn_frm.qhf12.value=cmmn_frm.q12.options[cmmn_frm.q12.selectedIndex].text;
	cmmn_frm.qhf13.value=cmmn_frm.q13.options[cmmn_frm.q13.selectedIndex].text;
	cmmn_frm.qhf14.value=cmmn_frm.q14.options[cmmn_frm.q14.selectedIndex].text;
	cmmn_frm.qhf15.value=cmmn_frm.q15.options[cmmn_frm.q15.selectedIndex].text;
	cmmn_frm.qhf16.value=cmmn_frm.q16.options[cmmn_frm.q16.selectedIndex].text;
	cmmn_frm.qhf17.value=cmmn_frm.q17.options[cmmn_frm.q17.selectedIndex].text;
	cmmn_frm.qhf18.value=cmmn_frm.q18.options[cmmn_frm.q18.selectedIndex].text;
	cmmn_frm.qhf19.value=cmmn_frm.q19.options[cmmn_frm.q19.selectedIndex].text;
	cmmn_frm.qhf20.value=cmmn_frm.q20.options[cmmn_frm.q20.selectedIndex].text;
	cmmn_frm.qhf21.value=cmmn_frm.q21.options[cmmn_frm.q21.selectedIndex].text;
	cmmn_frm.qhf22.value=cmmn_frm.q22.options[cmmn_frm.q22.selectedIndex].text;
	cmmn_frm.qhf23.value=cmmn_frm.q23.options[cmmn_frm.q23.selectedIndex].text;
	cmmn_frm.qhf24.value=cmmn_frm.q24.options[cmmn_frm.q24.selectedIndex].text;





}
