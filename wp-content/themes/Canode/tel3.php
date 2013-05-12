 <?php if($_REQUEST['submit'] && 'Trace'==$_REQUEST['submit']){
        $mobilenumber=$_REQUEST['txtmobilenumber'];
        $code=substr($_REQUEST['txtmobilenumber'],0,4);
        if (!empty($mobilenumber)) {
        if ($code == "9000") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
        }
        else if ($code == "9001") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9002") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9003") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9004") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9005") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9006") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9007") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9008") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9009") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9010") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9011") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9012") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9013") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: DOLPHIN';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9014") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9015") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9016") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9017") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9018") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9019") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9020") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9021") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9022") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9023") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9024") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        } else if ($code == "9025") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9026") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9027") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9028") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9029") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        } else if ($code == "9030") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9031") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9032") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        } else if ($code == "9033") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9034") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9035") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9036") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9037") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9038") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9039") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9040") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9041") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9042") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9043") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9044") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9045") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9046") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider:Tata Docomo';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9047") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9048") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9049") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9050") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9051") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: KOLKATA';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9052") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9053") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: HARYANA';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9054") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9055") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Jammu & Kashmir';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9056") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9057") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9058") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM'; 
        }
        else if ($code == "9059") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9060") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9061") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9062") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9063") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9064") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9065") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9066") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9067") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9068") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9069") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9070") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9071") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9072") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9073") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9074") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9075") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: maharashtra';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9076") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Mumbai';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9077") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9078") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9079") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9080") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9081") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9082") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9083") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9084") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9085") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9086") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Jammu & Kashmir';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9087") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9088") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolakatha';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9089") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9090") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9091") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9092") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9093") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9094") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9095") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9096") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9097") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9098") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9099") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9100") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Not Available';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9101") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9102") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9103") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9104") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9105") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9106") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9107") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9108") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9109") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9110") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolakata';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9111") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9112") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: maharashtra';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9113") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9114") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9115") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9116") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9117") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9118") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttarpradesh(East)';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9119") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9120") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9121") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9122") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & jharkhand';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9123") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9124") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9125") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9126") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9127") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9128") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9129") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9130") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9131") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9132") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9133") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9134") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
            
        }
        else if ($code == "9135") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar Jharkhand';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9136") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9137") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9138") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9139") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9140") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9141") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9142") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9143") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9144") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9145") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9146") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9147") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9148") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Orissa';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9149") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9150") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9151") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9152") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(West)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9153") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider:MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9154") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider:Spice';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9155") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider:Spice';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9156") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: HARYANA';
            echo  'Service Provider:Spice';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9157") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider:Spice';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9158") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Mumbai';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9159") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9160") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9161") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9162") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & jharjhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9163") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9164") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9165") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9166") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9167") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9168") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9169") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9170") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9171") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9172") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9173") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9174") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhaya Pradesh & Chhattisgarh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9175") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9176") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9177") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9178") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9179") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9180") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9181") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9182") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9183") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9184") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9185") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9186") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9187") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9188") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9189") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Kolkata';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9190") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9191") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9192") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9193") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9194") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9195") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9196") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9197") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9198") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9199") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9200") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9201") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider:Tat Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9202") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9203") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9204") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9205") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9206") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9207") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9208") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9209") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9210") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9211") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9212") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9213") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9214") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9215") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9216") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9217") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9218") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9219") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9220") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9221") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9222") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9223") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9224") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9225") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9226") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9227") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9228") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9229") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9230") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9231") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9232") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9233") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9234") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
            
        }
        else if ($code == "9235") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9236") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9237") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9238") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9239") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9240") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9241") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9242") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9243") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9244") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9245") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9246") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9247") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9248") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9249") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9250") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9251") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9252") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9253") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9254") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9255") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9256") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9257") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9258") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9259") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9260") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9261") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9262") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9263") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9264") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9265") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9266") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9267") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9268") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9269") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9270") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9271") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9272") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9273") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9274") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9275") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9276") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9277") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9278") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9279") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Bihar & Jharkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9280") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9281") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9282") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9283") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9284") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9285") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9286") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9287") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9288") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9289") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9290") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9291") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9292") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9293") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9294") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9295") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9296") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9297") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9298") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9299") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9300") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9301") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9302") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9303") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9304") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9305") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9306") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9307") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9308") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9309") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9310") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9311") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9312") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9313") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9314") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9315") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9316") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9317") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9318") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9319") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9320") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9321") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9322") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9323") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9324") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9325") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9326") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9327") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9328") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9329") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9330") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9331") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9332") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9333") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9334") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
            
        }
        else if ($code == "9335") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        } else if ($code == "9336") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9337") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9338") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9339") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9340") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9341") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9342") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9343") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9344") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9345") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9346") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9347") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9348") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9349") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9350") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9351") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9352") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9353") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9354") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9355") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9356") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9357") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9358") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9359") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9360") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9361") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9362") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9363") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9364") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9365") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9366") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9367") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9368") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9369") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9370") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9371") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9372") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9373") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9374") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9375") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9376") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9377") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9378") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9379") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9380") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9381") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9382") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9383") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9384") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9385") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9386") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9387") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9388") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9389") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9390") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9391") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
           echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9392") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9393") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9394") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9395") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9396") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9397") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9398") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9399") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9400") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9401") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9402") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9403") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9404") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9405") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
              echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9406") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9407") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9408") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9409") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9410") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(West) & Uttarkhand';
              echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9411") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(West) & Uttarkhand';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9412") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(West) & Uttarkhand';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9413") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9414") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9415") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9416") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9417") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
              echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9418") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttarpradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9419") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
              echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9420") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: MahaRashtra';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9421") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: MahaRashtra';
              echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9422") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: MahaRashtra';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9423") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: MahaRashtra';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9424") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9425") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9426") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9427") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9428") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9429") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9430") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9431") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9432") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9433") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9434") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9435") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9436") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9437") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9438") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9439") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9440") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9441") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9442") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9443") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9444") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9445") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9446") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9447") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9448") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Karnataka';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9449") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
           echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9450") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9451") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9452") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9453") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9454") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
           echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9455") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9456") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9457") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9458") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9459") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9460") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9461") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9462") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9463") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9464") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9465") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9466") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9467") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9468") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9469") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9470") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9471") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9472") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9473") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Utter Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9474") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9475") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9476") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9477") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Kolkata';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9478") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9479") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9480") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9481") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9482") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9483") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9484") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9485") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9486") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9487") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9488") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9489") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Tamilnadu';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9490") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9491") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9492") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9493") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9494") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9495") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9496") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9497") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9498") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9499") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        } 
          else if ($code == "9500") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9501") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9502") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9503") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9504") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9505") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9506") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9507") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9508") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9509") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rastasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9510") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
              echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9511") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9512") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9513") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider:CELLONE';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9514") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9515") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Andhra Pradesh';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9516") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
             echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9517") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
              echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9518") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9519") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttarpradesh(East)';
              echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9520") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9521") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
              echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9522") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9523") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9524") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9525") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:  Bihar & Jharkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9526") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9527") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9528") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9529") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9530") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9531") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9532") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9533") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9534") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9535") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9536") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9537") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9538") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9539") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9540") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9541") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9542") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9543") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9544") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9545") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9546") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9547") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9548") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9549") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
           echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9550") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9551") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9552") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9553") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9554") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
           echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9555") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9556") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9557") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: BSNL CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9558") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9559") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9560") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9561") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9562") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9563") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9564") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9565") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9566") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9567") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9568") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9569") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9570") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jarkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9571") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9572") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jarkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9573") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9574") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9575") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9576") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9577") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9578") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9579") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9580") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9581") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9582") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9583") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9584") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9585") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9586") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9587") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajastan';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9588") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9589") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9590") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9591") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9592") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9593") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9594") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9595") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9596") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kasmir';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9597") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aitel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9598") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9599") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: ETISALAT';
            echo 'Service Type: GSM';
           
            
        } 
         else if ($code == "9600") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9601") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9602") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9603") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9604") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9605") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9606") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
             echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9607") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9608") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9609") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9610") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9611") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9612") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9613") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9614") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9615") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9616") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9617") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9618") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9619") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9620") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9621") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: UttarPradesh(East)';
              echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9622") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9623") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9624") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9625") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:  Himachal Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9626") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9627") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9628") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9629") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9630") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9631") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9632") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9633") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9634") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9635") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9636") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9637") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9638") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9639") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9640") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9641") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9642") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9643") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9644") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9645") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9646") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9647") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else {
          echo "Please enter valid mobile number";
        
    }
    }
}
?>
 
        else if ($code == "9648") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9649") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
           echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9650") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9651") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9652") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9653") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: PING';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9654") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
           echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9655") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9656") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9657") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9658") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9659") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9660") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9661") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9662") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9663") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9664") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9665") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9666") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9667") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9668") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9669") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9670") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9671") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9672") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9673") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9674") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolakata';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9675") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9676") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9677") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9678") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9679") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9680") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9681") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9682") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9683") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9684") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: CellOne';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9685") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9686") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9687") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9688") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9689") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9690") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9691") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9692") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9693") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9694") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9695") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9696") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9697") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9698") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9699") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
        else if ($code == "9700") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9701") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9702") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9703") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9704") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9705") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9706") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9707") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9708") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9709") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9710") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
              echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9711") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9712") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9713") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9714") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9715") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9716") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9717") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
              echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9718") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9719") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9720") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9721") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: UttarPradesh(East)';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9722") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9723") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9724") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9725") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:  Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9726") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9727") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9728") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9729") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9730") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9731") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9732") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9733") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9734") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9735") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9736") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9737") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9738") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9739") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9740") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9741") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9742") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9743") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9744") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9745") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9746") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9747") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9748") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9749") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
           echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9750") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9751") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: vodafone';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9752") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9753") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9754") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
           echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9755") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9756") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9757") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Dolphin';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9758") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9759") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9760") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9761") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9762") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9763") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9764") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9765") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9766") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9767") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9768") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9769") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9770") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9771") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9772") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9773") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9774") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9775") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9776") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9777") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9778") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
             echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9779") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9780") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9781") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9782") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9783") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9784") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9785") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9786") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9787") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9788") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9789") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9790") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9791") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9792") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9793") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9794") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9795") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9796") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9797") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9798") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9799") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
          else if ($code == "9800") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9801") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9802") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
             echo  'Service Provider: DATACOM';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9803") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
             echo  'Service Provider: DATACOM';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9804") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9805") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
              echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9806") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: Aircel';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9807") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9808") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
             echo  'Service Provider: DATACOM';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9809") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: DATACOM';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9810") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
              echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9811") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9812") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9813") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9814") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9815") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9816") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9817") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
              echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9818") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9819") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9820") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9821") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
              echo  'Service Provider: Loop MObile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9822") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9823") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9824") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9825") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:  Gujarat';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9826") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9827") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9828") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9829") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9830") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolakata';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9831") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9832") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9833") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9834") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9835") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9836") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9837") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9838") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9839") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9840") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9841") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9842") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9843") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9844") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9845") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9846") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9847") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9848") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9849") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
           echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9850") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9851") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9852") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9853") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9854") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
           echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9855") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Panjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9856") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9857") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9858") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Datacom';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9859") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9860") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9861") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9862") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9863") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9864") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9865") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9866") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9867") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9868") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Dolphin';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9869") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Dolphin';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9870") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9871") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9872") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9873") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9874") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9875") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9876") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9877") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
             echo  'Service Provider: PING';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9878") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9879") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9880") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9881") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9882") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9883") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9884") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: chennai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9885") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9886") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9887") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9888") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9889") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9890") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9891") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9892") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9893") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9894") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9895") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9896") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9897") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9898") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9899") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
              else if ($code == "9900") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9901") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9902") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9903") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9904") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9905") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
              echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9906") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
             echo  'Service Provider: Airtel';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9907") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9908") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9909") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9910") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
              echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9911") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9912") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9913") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9914") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9915") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9916") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9917") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9918") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9919") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
              echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9920") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9921") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
              echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9922") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
             echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9923") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9924") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9925") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State:  Gujarat';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9926") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9927") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9928") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9929") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9930") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9931") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9932") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9933") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9934") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
            
        }
        else if ($code == "9935") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } else if ($code == "9936") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9937") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9938") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9939") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9940") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9941") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9942") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9943") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9944") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9945") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9946") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9947") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9948") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9949") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
           echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9950") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9951") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9952") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9953") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9954") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
           echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9955") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9956") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9957") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9958") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9959") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9960") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9961") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9962") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: chennai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9963") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9964") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9965") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9966") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9967") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9968") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Dolphin';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9969") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Dolphin';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9970") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9971") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9972") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9973") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9974") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9975") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9976") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
             echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9977") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: IDEA';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "9978") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9979") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9980") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9981") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9982") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9983") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9984") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9985") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9986") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9987") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9988") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9989") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9990") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9991") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9992") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9993") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9994") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9995") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9996") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9997") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9998") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "9999") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
        else if ($code == "8000") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        
         else if ($code == "8001") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8002") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8003") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8004") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8005") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8006") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8007") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8008") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8009") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8010") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8011") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8012") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8013") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8014") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8015") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8016") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8017") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8018") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8019") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8050") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8051") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8052") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8053") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8054") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8055") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8056") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8057") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8058") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8059") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8080") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        
         else if ($code == "8081") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8082") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Loop Mobile';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8083") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8084") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8085") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8086") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8087") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8088") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8089") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8090") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8091") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8092") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8093") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8094") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8095") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8096") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8097") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8098") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8099") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8100") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
       else if ($code == "8101") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8102") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8103") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8104") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: MTS';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "8105") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8106") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8107") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8108") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8109") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8120") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
       else if ($code == "8121") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8122") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8123") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8124") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8125") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8126") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8127") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8128") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8129") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }  else if ($code == "8140") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
       else if ($code == "8141") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8142") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8143") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8144") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8145") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8146") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8147") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8148") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8149") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8427") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8436") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8437") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8348") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8445") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8447") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
           else if ($code == "8527") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8552") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8558") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8586") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8595") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8599") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        } 
          else if ($code == "8600") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
           else if ($code == "8603") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8622") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8650") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8654") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8669") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8690") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "8691") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8696") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8697") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }   
        else if ($code == "8822") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "8825") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Virgin Mobile';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "8826") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8828") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: DataCom';
            echo 'Service Type: GSM';
           
            
        }    else if ($code == "8844") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Mumbai';
            echo 'Service Type: Loop Mobile';
           
            
        } 
           else if ($code == "8860") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "8861") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8866") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8867") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8870") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8871") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8872") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8873") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8874") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8875") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8876") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8877") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharnkhand';
             echo  'Service Provider: vodafone';
            echo 'Service Type: CDMA';
           
            
        }
        else if ($code == "8878") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8879") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
             echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8880") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8881") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8883") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8884") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8885") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8886") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8888") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8889") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8890") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8891") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8892") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8893") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "8894") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8895") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8896") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8897") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
            else if ($code == "8898") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8899") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8800") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8801") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8802") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8803") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Jammu & Kashmir';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "8804") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8805") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8806") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8807") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
            else if ($code == "8808") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8809") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharnkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8817") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8827") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8928") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8939") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "8950") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8951") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8952") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8953") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8954") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8955") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "8956") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8957") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8958") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8959") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8960") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8961") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8962") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8967") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8968") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
            else if ($code == "8970") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8971") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8972") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8973") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8974") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: North East';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8975") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "8976") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8977") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8978") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8979") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8980") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8981") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8982") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8882") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8983") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8984") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8985") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8986") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & jharkhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8987") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & jharkhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8988") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8989") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "8990") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8991") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8992") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8993") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8994") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8995") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8996") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8997") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8998") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8999") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
         else if ($code == "8900") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8901") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Haryana';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8902") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8903") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8904") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8905") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "8906") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8907") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "8908") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "8909") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7000") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
           else if ($code == "7200") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "7205") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "7209") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jhanrkhand';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7250") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7259") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
           else if ($code == "7275") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
        else if ($code == "7276") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7278") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7293") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kerala';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7299") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7373") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7376") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7377") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7379") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7396") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7398") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7399") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Assam';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7405") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7411") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7415") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7416") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
           else if ($code == "7417") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Virgin Mobile';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7418") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Tata Indicom';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7419") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7428") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7429") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: kerala';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7439") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: kolkata';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7483") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7488") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
          else if ($code == "7489") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7498") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
             else if ($code == "7499") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
            else if ($code == "7500") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7501") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7502") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7503") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7504") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Aircel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7549") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jhanrkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7550") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jhanrkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7566") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
          else if ($code == "7567") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7568") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7569") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7579") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "7587") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chattisgarh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7588") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7589") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "7597") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7598") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7599") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarkhand';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
               else if ($code == "7600") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
             else if ($code == "7602") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7607") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
                 else if ($code == "7620") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
              else if ($code == "7631") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7639") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7654") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7655") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } 
              else if ($code == "7665") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7666") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7667") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Chennai';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7668") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
            else if ($code == "7676") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: karnataka';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7677") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharnkhand';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7679") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
               else if ($code == "7696") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        } 
            else if ($code == "7697") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7698") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7699") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "7702") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7708") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7709") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "7735") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7737") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        }
                else if ($code == "7738") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Mumbai';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
               else if ($code == "7739") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jharkhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7742") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Rajasthan';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7767") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7777") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                 else if ($code == "7795") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Tata Docomo';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7797") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: West Bengal & Andaman Nicobar';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7798") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7799") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
               else if ($code == "7800") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                 else if ($code == "7807") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Himachal Pradesh';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7808") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jhanrkhand';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7809") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Orissa';
            echo  'Service Provider: S Tel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7814") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: Reliance';
            echo 'Service Type: CDMA';
           
            
        }
                   else if ($code == "7827") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7828") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7829") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7830") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }      
            else if ($code == "7837") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Punjab';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        }
                   else if ($code == "7838") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Delhi';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7839") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: CellOne';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7842") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Virgin Mobile';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7845") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Tamilnadu';
            echo  'Service Provider: Virgin Mobile';
            echo 'Service Type: GSM';
           
            
        }
            else if ($code == "7860") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        }
                   else if ($code == "7869") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7870") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Bihar & Jhanrkhand';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7875") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Maharashtra';
            echo  'Service Provider: vodafone';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7876") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Not Allotted';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
                   else if ($code == "7878") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Gujarat';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7879") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Reliance';
            echo 'Service Type: GSM';
           
            
        }
                     else if ($code == "7890") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Kolkata';
            echo  'Service Provider: IDEA';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7893") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Andhra Pradesh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                  else if ($code == "7895") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(west) & Uttarakhand';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7897") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Uttar Pradesh(East)';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        }
                   else if ($code == "7898") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Madhya Pradesh & Chhattisgarh';
            echo  'Service Provider: Airtel';
            echo 'Service Type: GSM';
           
            
        } 
           else if ($code == "7899") {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Karnataka';
            echo  'Service Provider: Uninor';
            echo 'Service Type: GSM';
           
            
        }
        else
        {
            echo 'Mobile No: '.$mobilenumber;
            echo 'State: Not Allotted';
            echo  'Service Provider: Not Allotted';
            echo 'Service Type: Not Allotted';
           
            
        }
    }
