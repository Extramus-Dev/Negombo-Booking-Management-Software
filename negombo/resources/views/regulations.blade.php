@extends('layouts.usermaster')

@section('section')
  <div class="container-fluid padding20">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <div class="card">
            <div class="card-header">
              <h3><strong>{{ (__('Terms and Regulations')) }}</strong></h3>
            </div>
            <div class="card-body">
              {{-- <iframe src="{{ asset('images/docs/regulations.pdf') }}" width="100%" height="1000px" /></iframe> --}}
              <p align="center"><span style="color: #1f3864;"><span style="font-size: x-large;">PARCO TERMALE NEGOMBO</span></span></p>
              <p align="center"><span style="color: #1f3864;"><span style="font-size: large;">PIANO ANTI DIFFUSIONE COVID-19</span></span></p>
              <p align="center">&nbsp;</p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>PROTOCOLLO DI SICUREZZA ANTI-DIFFUSIONE SARS-COV2</strong></span></span></p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>UNITA&rsquo; DI CRISI REGIONALE EX DECRETO P.G.R.C. N. 51 DEL 20.03.20</strong></span></span></p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"> <span style="font-size: xx-small;"><strong>- Allegato sub 1 all&rsquo;Ordinanza n.52 del 26.05.20 - </strong></span></span></p>
              <p style="text-align: center;"><span style="color: #ff0000;"><span style="font-size: xx-small;"><strong>*</strong></span></span><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong> IN CONTINUITA&rsquo; CON IL PROTOCOLLO CONDIVISO DALLE PARTI SOCIALI </strong></span></span><span style="color: #ff0000;"><span style="font-size: xx-small;"><strong>*</strong></span></span></p>
              <p align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>APPROVATO CON D.P.C.M. DEL 26 APRILE 2020 nonch&eacute; con i criteri generali dei documenti prodotti dall&rsquo;Inail e dall&rsquo;Istituto Superiore di Sanit&agrave;</strong></span></span></p>
              <p align="center">&nbsp;</p>
              <p align="center"><span style="color: #ff0000;"><span style="font-size: medium;"><strong>I SIGG.RI CLIENTI SONO TENUTI AD ATTENERSI ALLE DISPOSIZIONI CONTENUTE NEL PRESENTE PROTOCOLLO DI SICUREZZA:</strong></span></span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 1</strong></u></span><span style="color: #1f3864;"> &ndash; All&rsquo;ingresso del parco termale, sotto gli ombrelloni e nei pressi della cassa &egrave; esposta apposita cartellonistica informativa. La fruizione delle piscine e della spiaggia, a causa del Covid-19, &egrave; soggetta a restrizioni e risulter&agrave; diversa dagli anni precedenti, in particolare &egrave; inibito l&rsquo;accesso al bagno turco &ldquo;Hamam&rdquo;, alle piscine &ldquo;Bolla di Giada&rdquo; e al &ldquo;Buco Nero&rdquo;, per questo chiediamo la vostra comprensione.</span></p>
              <p align="justify"><a name="_GoBack"></a> <span style="color: #1f3864;"><u><strong>ART. 2</strong></u></span><span style="color: #1f3864;"> &ndash; Per evitare assembramenti l&rsquo;accesso al parco termale potr&agrave; avvenire con prenotazione. L&rsquo;uso della mascherina per l&rsquo;accesso e l&rsquo;uscita &egrave; obbligatorio; tale obbligo vige sempre ad eccezione di quando si &egrave; sotto l&rsquo;ombrellone oppure si &egrave; in piscina o in mare. Ne</span><span style="color: #000000;">l</span><span style="color: #1f3864;">l&rsquo;attesa di recarsi alla cassa del parco termale e di lasciare lo stabilimento bisogner&agrave; rispettare il distanziamento. Potr&agrave; essere sempre rilevata la temperatura corporea, impedendo l&rsquo;accesso in caso di temperatura superiore a 37,5&deg;. &Egrave; vietato l&rsquo;uso promiscuo degli ombrelloni, ad eccezione dei membri del medesimo nucleo familiare, o per soggetti che condividono la medesima unit&agrave; abitativa, o con persone che in base alle disposizioni vigenti non siano soggette a distanziamento interpersonale. Al primo accesso al parco termale degli abbonati e/o dei clienti giornalieri, gli stessi saranno accompagnati all&rsquo;ombrellone loro assegnato da un addetto che illustrer&agrave; le regole a cui attenersi. Non &egrave; consentita l&rsquo;attivit&agrave; natatoria all&rsquo;interno delle piscine (fatta eccezione per la Piscina Olimpionica) per cui per ogni ospite sar&agrave; calcolata una superficie pari a 4mq. di acqua. L&rsquo;ingresso alle piscine sar&agrave; regolato come segue:</span></p>
              <div id="TextSection" dir="ltr">
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 13 Jacuzzi Idromassaggi (mq. 3,50) e Nr 6 Piscina Idromassaggio Balze (mq. 7): 1 persona, fatta eccezione per appartenenti allo stesso nucleo familiare o conviventi, o che in base alle disposizioni vigenti non siano soggetti al distanziamento interpersonale.</span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- </span></span><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">Nr 29</span></span></span> <span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">Piscina Circolare (mq. 28,50): 7 persone. </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 26 Piscina Termale Grande (mq. 340): 85 persone. </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 22 Piscina Termale (mq. 51,50): 12 persone. </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 11 Piscina Olimpionica (mq. 495): 70 persone. </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 12 Piscina dell&rsquo;Arco (mq. 34.10): 8 persone. </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 7 Piscina Labirinto (2 vasche 15 mq. + 15 mq.) : 3 persone per ogni vasca - Nr 5 Piscina Maya(18&deg; -mq. 8,50; 40&deg;-mq. 33,00):18&deg;-2 persone; 40&deg;-8 persone. </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 2 Piscina Templare (mq. 110): 9 persone ( 1 persona per doccia). </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 3 Piscina Nesti (mq. 85): 21 persone. </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- Nr 4 Grotta Antroterapia (mq.35): 8 persone </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><u>NB</u></span></span></span><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">: i numeri si riferiscono alle piantine esposte all&rsquo;interno del parco. </span></span></span></span></span></p>
              </div>
              <div id="Section1" dir="ltr">
              <p align="justify"><span style="color: #1f3864;">E&rsquo; raccomandata la regolare applicazione delle consuete norme di sicurezza igienica in acqua di piscina: prima di immergersi, provvedere ad un&rsquo;accurata doccia su tutto il corpo. Sono vietati gli assembramenti, tutti gli sport acquatici dovranno essere svolti nel rispetto del distanziamento interpersonale.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 3</strong></u></span><span style="color: #1f3864;"> &ndash; La disposizione degli ombrelloni &egrave; organizzata garantendo una superficie minima o superiore ai 10 mq a postazione, con un distanziamento minimo tra le attrezzature di 1,5 metri rispetto alle attrezzature dell&rsquo;ombrellone contiguo. I corridoi di transito sono a senso unico, le postazioni sono numerate come da segnaletica e la prenotazione &egrave; obbligatoria sia per i clienti stagionali che per quelli giornalieri. Al momento della prenotazione o dell&rsquo;accesso al parco termale i clienti dovranno comunicare i propri dati che saranno registrati e conservati per 14 giorni, come da informativa sulla privacy esposta in direzione, al fine di rintracciare retrospettivamente eventuali contatti a seguito di contagi. I genitori, o chi per essi, vigileranno sulle norme di distanziamento sociale dei bambini in tutte le circostanze. </span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 4</strong></u></span><span style="color: #1f3864;"> &ndash; La prenotazione del posto ombrellone e il pagamento dell&rsquo;ingresso al parco potranno essere fatti con l&rsquo;APP da scaricare su cellulare, tablet, Ipad, computer ecc. </span></p>
              <p align="justify"><span style="color: #1f3864;">ART. 5 &ndash; In caso di pioggia o cattivo tempo si raccomanda la clientela di non affollarsi verso l&rsquo;uscita, ma di aspettare sotto l&rsquo;ombrellone il proprio turno di evacuazione che sar&agrave; indicato dal personale del parco termale. Si ricorda che nelle zone ristorazione/bar &egrave; consentito l&rsquo;accesso ad un numero di persone pari ai posti a sedere e muniti di mascherina.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 6</strong></u></span><span style="color: #1f3864;"> &ndash; E&rsquo; vietato l&rsquo;uso promiscuo delle cabine spogliatoio, che potranno essere usate solo dopo la disinfezione dall&rsquo;uscita del cliente precedente. E&rsquo;, altres&igrave;, vietato l&rsquo;uso promiscuo di biancheria: l&rsquo;utente dovr&agrave; accedere al servizio munito di tutto l&rsquo;occorrente; qualora ne fosse sfornito potr&agrave; noleggiare e/o acquistare teli e/o accappatoi al guardaroba. L&rsquo;utilizzo del telo su sdraio, lettini e sedute &egrave; obbligatorio.</span></p>
              <p align="justify"><span style="color: #1f3864;">Al guardaroba gli indumenti e gli oggetti personali dovranno essere riposti all&rsquo;interno della propria borsa; sono disponibili sacchetti atti a contenere i propri effetti personali.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 7</strong></u></span><span style="color: #1f3864;"> &ndash; Nel caso in cui un ospite, durante la permanenza all&rsquo;interno della struttura, manifesti febbre o sintomi respiratori (tosse secca, mal di gola, difficolt&agrave; respiratoria) lo deve comunicare al personale senza entrare in contatto diretto. L&rsquo;Azienda provveder&agrave; tempestivamente ad informare il Dipartimento di prevenzione dell&rsquo;ASL, fatte salve situazioni di particolare criticit&agrave; in cui si richieder&agrave; l&rsquo;intervento del 118. Nell&rsquo;attesa del parere sanitario si dovr&agrave;: dotare il cliente, se non gi&agrave; in possesso, di mascherina chirurgica, evitare il contatto con altre persone, accompagnarlo in un ambiente isolato o in infermeria preventivamente attrezzata con disinfettante / salviette germicide per la pulizia delle superfici e dei tessuti, sacchetto monouso per rifiuti a rischio biologico. La porta del locale dovr&agrave; essere chiusa; il locale dovr&agrave; essere adeguatamente ventilato. L&rsquo;eventuale consegna di cibo e bevande o altro sar&agrave; effettuata lasciando quanto necessario fuori la porta. Eventuali necessit&agrave; improrogabili che comportino l&rsquo;ingresso di una persona nel medesimo ambiente dovranno essere svolte da un medico presente oppure da persona in buono stato di salute utilizzando gli opportuni dispositivi di protezione individuale (mascherina FFP2 o FFP3 protezione facciale e guanti, grembiule protettivo tuta a maniche lunghe a tutta lunghezza usa e getta). Il cliente dovr&agrave; eliminare eventuale materiale usato in isolamento (fazzoletti di carta ecc.), chiudendo tutto in un doppio sacchetto, che verr&agrave; disinfettato e smaltito insieme ai materiali infetti eventualmente prodottisi durante l&rsquo;intervento del personale sanitario. Quest&rsquo;ultimo valuter&agrave; il caso e provveder&agrave; insieme al personale dell&rsquo;Azienda alla identificazione di tutti i contatti del cliente.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 8</strong></u></span><span style="color: #1f3864;"> &ndash; Tutti i locali dell&rsquo;azienda e le docce sono stati sanificati (nebulizzazione dei principi attivi tecnicamente certificati) all&rsquo;apertura e tale operazione sar&agrave; ripetuta in base all&rsquo;analisi del rischio, mentre la pulizia (rimozione dello sporco visibile con acqua e detergenti o prodotti enzimatici) viene effettuata periodicamente durante la giornata e quando se ne presenta necessit&agrave;, la disinfezione (procedimento in grado di eliminare la maggior parte dei microrganismi patogeni con impiego di specifici prodotti ad azione germicida certificati) avr&agrave; cadenza giornaliera. E&rsquo; garantita regolare e frequente pulizia e disinfezione delle aree comuni quali spogliatoi, cabine, docce e servizi igienici. Le attrezzature (sdraio, sedie, lettini ecc.) saranno disinfettate ad ogni cambio persona e alla fine di ogni giornata. Particolare attenzione &egrave; posta alla disinfezione delle superfici che vengono toccate con maggiore frequenza quali, ad esempio, corrimano, maniglie, interruttori. </span></p>
              <p align="justify"><span style="color: #1f3864;">Al guardaroba sono presenti disinfettante/salviette germicide monouso per la pulizia delle superfici che, se utilizzati, saranno smaltiti negli appositi cestini portarifiuti.</span></p>
              <p align="justify"><span style="color: #1f3864;">Per l&rsquo;accesso ai servizi igienici usare la mascherina.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 9</strong></u></span><span style="color: #1f3864;"> &ndash; Ai clienti con sintomi febbrili, a quelli che hanno avuto contatti con persone con Covid &ndash; 19 nei 14 giorni precedenti e quelle poste in quarantena, &egrave; fatto divieto di recarsi nei locali dell&rsquo;Azienda;</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 10</strong></u></span><span style="color: #1f3864;"> &ndash; Le precauzioni comportamentali da seguire al fine di ridurre il contagio sono quelle dettate dall&rsquo;OMS sulle misure di distanziamento sociale, pulizia delle mani e igiene respiratoria cos&igrave; riassunte:</span></p>
              <p align="justify"><span style="color: #1f3864;">Garantire una corretta igiene delle mani mediante lavaggio frequente delle stesse con acqua corrente calda e detergenti disinfettante per almeno un minuto, in alternativa sono istallati dispenser di gel disinfettante.</span></p>
              <p align="justify"><span style="color: #1f3864;">Distanziamento sociale di almeno 1 mt e uso obbligatorio delle mascherine. Nella impossibilit&agrave; di rispettare le distanze e quando si usano spazi comuni; le mascherine andranno sempre indossate dopo aver disinfettate le mani e avendo cura di non compromettere la loro efficacia contaminandole involontariamente. </span></p>
              <p align="justify"><span style="color: #1f3864;">Le mascherine dovranno essere smaltite negli appositi contenitori segnalati da cartelli.</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 11</strong></u></span><span style="color: #1f3864;"> &ndash; Il responsabile del servizio del piano Anti diffusione Covid 19 del parco Negombo: &egrave; il Signor MARCO CASTAGNA.</span><span style="color: #1f3864;"><span style="font-size: medium;"> Gli operatori del servizio del piano Anti diffusione Covid 19 per il settore:</span></span> <span style="color: #1f3864;"><span style="font-size: medium;">Cassa Piscine la Sig.ra</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> CANTARESSI ANTONELLA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">, per le Piscine &egrave; il Signor </span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong>SCANDIUZZI</strong></span></span> <span style="color: #1f3864;"><span style="font-size: medium;"><strong>BRUNO</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">, per la Spiaggia Negombo il Signor </span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong>CANCELLO GIUSEPPE, </strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">per il guardaroba la Signora</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> CAPRIO RAFFAELLA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">, per gli uffici la Sig.ra</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> RONELLI ADRIANA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">.</span></span></p>
              <p align="justify">&nbsp;</p>
              <p align="center"><span style="color: #1f3864;"><u>VADEMECUM MISURE IGIENICO SANITARIE</u></span></p>
              </div>
              <div id="Section2" dir="ltr">
              <p align="justify"><span style="color: #1f3864;">Lavarsi spesso le mani</span></p>
              <p align="justify"><span style="color: #1f3864;">Evitare il contatto con persone che soffrono di infezioni respiratorie</span></p>
              <p align="justify"><span style="color: #1f3864;">Evitare abbracci e strette di mano</span></p>
              <p align="justify"><span style="color: #1f3864;">Mantenere la distanza di almeno 1 mt</span></p>
              <p align="justify"><span style="color: #1f3864;">Starnutire, tossire in un fazzoletto o nell&rsquo;incavo del braccio ed evitare il contatto con le secrezioni respiratorie</span></p>
              <p align="justify"><span style="color: #1f3864;">Evitare l&rsquo;uso promiscuo di bottiglie e bicchieri</span></p>
              <p align="justify"><span style="color: #1f3864;">Non toccarsi occhi, naso e bocca con le mani</span></p>
              <p align="justify"><span style="color: #1f3864;">Evitare assembramenti</span></p>
              </div>
              <p align="center">&nbsp;</p>
              <p align="center"><span style="color: #ff0000;">Un estratto del presente regolamento &egrave; posizionato sotto ogni ombrellone per ricordare le linee guida.</span></p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection