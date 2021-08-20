<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include('../include/mata.php');
    ?> 
  </head>
  <body>   

    <?php
      include('../include/header.php');
    ?>      
    
    <div class="pointtest">
        <div class="box">
        <h1 class='title'>Point Test</h1>
        <p>
            This Points Test calculator can give you an idea of your points score for a skilled visa. Please note, you will need to confirm your points score with one of our specialists as different criteria applies for each option. 65 points
            may not be sufficient for your specific situation.
        </p>
        </div>

        <div class="pointtestcontainer"></div>

        <h3 class="score">Your total score is 0</h3>
        <p class="remark">You are not eligable to apply this visa</p>
    </div>    
    
    <?php
      include('../include/footer.php');
    ?>
    

    <script>
      const data = {
        visa: {
          header: 'Visa Subclass',
          question: 'Select one of your sub class',

          answers: {
            sub_189: {
              label: 'Skilled Independent Subclass 189',
              value: 0,
              note: 'No sponsorship required. You must have an occupation on the relevant Skilled Occupations List.',
            },
            sub_190: {
              label: 'Skilled Nominated Subclass 190',
              value: 5,
              note: 'Requires nomination by a State or Territory Government. You must have an occupation on the relevant Skilled Occupations List.',
            },
            sub_491: {
              label: 'Skilled Work Regional Subclass 491',
              value: 15,
              note: 'requires sponsorship by a relative living in a designated or regional area or a state or territory government.',
            },
          },
        },
        age: {
          header: 'Age',
          question: 'Which age band do you fit into?',
          answers: {
            age1: {
              label: 'Under 18',
              value: 0,
              note: '<span>You are not eligible due to Age Factor</span>',
            },
            age2: {
              label: '18 to 24',
              value: 25,
            },
            age3: {
              label: '25 to 32',
              value: 30,
            },
            age4: {
              label: '33 to 39',
              value: 25,
            },
            age5: {
              label: '40 to 44',
              value: 15,
            },
          },
        },
        ela: {
          header: 'English Language Ability',
          question: 'How would you rate your English language ability?',
          answers: {
            ela1: {
              label: 'Competent English',
              value: 0,
              note: `Passport from UK, USA, Ireland, Canada or NZ; or</br>
                     IELTS: 6+ in each component; or</br>
                     PTE Academic: 50+ in each component; or</br>
                     Cambridge (CAE): 169+ in each component; or</br>
                     TOEFL iBT: 12 in Listening, 13 Reading, 21 Writing, 18 Speaking`,
            },
            ela2: {
              label: 'Proficient English',
              value: 10,
              note: `IELTS: 7+ in each component; or</br>
                      OET: B pass in each component; or</br>
                      PTE Academic: 65+ in each component; or</br>
                      Cambridge (CAE): 185+ in each component; or</br>
                      TOEFL iBT: 24 in Listening, 24 Reading, 27 Writing, 23 Speaking`,
            },
            ela3: {
              label: 'Superior English',
              value: 20,
              note: `IELTS: 8+ in each component; or</br>
                     OET: A pass in each component; or</br>
                     PTE Academic: 79+ in each component; or</br>
                     Cambridge (CAE): 200+ in each component; or</br>
                     TOEFL iBT: 28 in Listening, 29 Reading, 30 Writing, 26 Speaking`,
            },
            ela4: {
              label: 'Less than competent English',
              value: 0,
              note: '<span>You are not eligible due to English Language ability.</span>',
            },
          },
        },
        aeq: {
          header: 'Australian Educational Qualification',
          question: 'Have you met the requirements for the award of degree, diploma, advanced diploma or trade qualification(s) which took at least 2 years (92 weeks) of full-time study in Australia at an Australian institution?',
          answers: {
            aeq1: {
              label: 'Yes:Degree, diploma advanced diploma or trade qualification(s) taking at least 2 years of full-time study in Australia.',
              value: 5,
            },
            aeq2: {
              label: 'No: I havent',
              value: 0,
            },
          },
        },
        seq: {
          header: 'Specialist Education Qualification',
          question: 'Have you met the requirements for the award of an Australian specialist educational qualification?',
          answers: {
            seq1: {
              label: `Yes: post-graduate studies at doctoral or masters (research) level in a specific field eg science, technology, engineering, mathematics, or information and communication technology taking at least 2 years of full time
                      study in Australia.</br> *Our Migration Specialist will confirm whether you can claim a specialist field`,
              value: 10,
            },
            seq2: {
              label: 'No: I havent',
              value: 0,
            },
          },
        },
        qual: {
          header: 'Qualifications',
          question: 'What is your highest Qualification?',
          answers: {
            qual1: {
              label: `No Recognised Qualifications`,
              value: 0,
            },
            qual2: {
              label: 'Recognised PhD (Doctorate)',
              value: 20,
            },
            qual3: {
              label: 'Recognised Bachelor degree or higher',
              value: 15,
            },
            qual4: {
              label: 'Recognised Trade Qualification including Diploma or Trade Certificate completed at an Australian educational',
              value: 10,
            },
          },
        },
        oversea: {
          header: 'Overseas Work Experience',
          question: `Overseas, in the last 10 years, how long have you worked in your nominated occupation or closely related skilled occupation?</br> *As specific criteria applies, our Migration Specialist will need to assess your situation to
                confirm the number of years which can be claimed:`,
          answers: {
            oversea1: {
              label: `less than 3 years`,
              value: 0,
            },
            oversea2: {
              label: '8 years or more',
              value: 15,
            },
            oversea3: {
              label: '5 years or more',
              value: 10,
            },
            oversea4: {
              label: '3 years or more',
              value: 5,
            },
          },
        },
        awe: {
          header: 'Australian Work Experience',
          question: `In Australia, in the last 10 years, how long have you worked in your nominated occupation or closely related skilled occupation?</br> *As specific criteria applies, our Migration Specialist will need to assess your situation to confirm the number of years which can be claimed:`,
          answers: {
            awe1: {
              label: `less than 1 years`,
              value: 0,
            },
            awe2: {
              label: '1 years or more',
              value: 20,
            },
            awe3: {
              label: '3 years or more',
              value: 15,
            },
            awe4: {
              label: '5 years or more',
              value: 10,
            },
            awe5: {
              label: '8 years or more',
              value: 5,
            },
          },
        },
        psq: {
          header: 'Partner Skill Qualifications',
          question: `Check only ONE box which applies to you. *The following must apply at the time of invitation and application for a skilled visa.`,
          answers: {
            psq1: {
              label: `My partner is not an Australian citizen or permanent resident, cannot meet the competent english requirement`,
              value: 0,
            },
            psq2: {
              label: 'I am single or my partner is an Australian citizen or permanent resident',
              value: 10,
            },
            psq3: {
              label: 'My partner is under 45yo, is not an Australian citizen or permanent resident, can meet the competent english requirement',
              value: 10,
            },
            psq4: {
              label: 'My partner is under 45yo, is not an Australian citizen or permanent resident and can meet the competent english requirement',
              value: 5,
            },
          },
        },
        dl: {
          header: 'Designated Language',
          question: `Do any of the following apply to you?`,
          answers: {
            psq1: {
              label: `I am accredited as a para-professional interpreter or translator (level 2) or above by the National Accreditation Authority for Translators and Interpreters`,
              value: 5,
            },
            psq2: {
              label: 'None of above',
              value: 0,
            },
          },
        },
      };

      const card = document.querySelector('.pointtestcontainer');

      const render = function (datas) {
        for (const [qkey, question] of Object.entries(datas)) {
          let input = '';
          for (const [akey, answers] of Object.entries(question.answers)) {
            input += `<input type="radio" name="${qkey}" id="${akey}" value="${answers.value}" onchange="handle(this)"/>
                      <label for="${qkey}">${answers.label}</label><br />`;
          }
          const html = `<div class='card'>
                      <h4 class="card-header">${question.header}</h4>
                      <div class="card-body">
                      <p class='title'>${question.question}</p>
                      ${input}
                      <p class='note' id='${qkey}-result'></p>
                      </div>
                      <p class="card-footer" id='${qkey}-score'>Score - 0</p></div>`;
          card.insertAdjacentHTML('beforeend', html);
        }
      };
      render(data);

      function handle(src) {
        let note = data[src.name].answers[src.id].note ?? '';
        document.querySelector(`#${src.name}-result`).innerHTML = note;
        document.querySelector(`#${src.name}-score`).innerHTML = `Score - ${src.value}`;
        const footerarray = document.querySelectorAll('.card-footer');
        let total = 0;
        footerarray.forEach((footer) => {
          total += Number(footer.innerHTML.slice(8));
        });
        document.querySelector('.score').innerHTML = `Your total score is ${total}`;

        if (total > 65) {
          document.querySelector('.remark').innerHTML = `You are eligable to apply this visa`;
          document.querySelector(':root').style.setProperty('--color-result', '#28a745');
        } else {
          document.querySelector('.remark').innerHTML = `You are not eligable to apply this visa`;
          document.querySelector(':root').style.setProperty('--color-result', '#dc4545');
        }
      }
    </script>
  </body>
</html>