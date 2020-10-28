<?php

namespace Database\Factories;

use App\Models\Disease;
use App\Models\DiseaseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiseaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disease::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disease_type_id' => function() {
                return DiseaseType::factory()->create()->id;
            },
            'name' => ucwords($this->faker->randomElement(['Cavities','Periodontitis
            ','Sensitive teeth'])),
            'description' => $this->faker->randomElement(['Cavities are also called caries or tooth decay. These are areas of the tooth that have been permanently damaged and may even have holes in them. Cavities are fairly common. They occur when bacteria, food, and acid coat your teeth and form a plaque. The acid on your teeth starts to eat away at the enamel and then the underlying dentin, or connective tissue. Over time, this can lead to permanent damage.','Gum disease, also called gingivitis, is inflammation of the gums. It’s usually the result of plaque building up on your teeth due to poor brushing and flossing habits. Gingivitis can make your gums swell and bleed when you brush or floss. Untreated gingivitis can lead to periodontitis, a more serious infection.
            ','A tooth can crack or break from an injury to the mouth, chewing hard foods, or grinding the teeth at night. A cracked tooth can be very painful. You should visit your dentist right away if you’ve cracked or broken a tooth. teeth']),
            'statistics' => $this->faker->randomElement(['A deep cleaning is also known as scaling and root planning. It removes tartar from above and below the gumline that can’t be reached during a routine cleaning.','Following a dental cleaning, your dentist may apply a fluoride treatment to help fight off cavities. Fluoride is a naturally occurring mineral. It can help strengthen the enamel of your tooth and make them more resilient to bacteria and acid.
            ','If you show signs of a gum infection or you have a tooth abscess that has spread to other teeth or your jaw, your dentist may prescribe antibiotics to help get rid of the infection. The antibiotic may be in the form of a mouth rinse, gel, oral tablet, or capsule. Topical antibiotic gel may also be applied to the teeth or gums during surgical procedures. teeth']),
            'causes' => $this->faker->randomElement(['A filling is used to repair a cavity, crack, or hole in the tooth. The dentist will first use a drill to remove the damaged area of the tooth and then fill the hole with some material, such as amalgam or composite.','A crown is used if a large portion of your tooth needs to be removed or has broken off due to an injury. There are two types of crowns: an implant crown that fits over an implant, and a regular crown that fits over a natural tooth. Both types of crowns fill in the gap where your natural tooth appeared.
            ','Dental sealants are thin, protective coatings that are placed on the back teeth, or molars, to help prevent cavities. Your dentist may recommend a sealant for your children as soon as they get their first molars, at around age six, and again when they get their second set of molars around age 12. Sealants are easy to apply and completely painless.']),
            'symptoms' => $this->faker->randomElement(['You might need a root canal if tooth decay reaches all the way inside the tooth to the nerve. During a root canal, the nerve is removed and replaced with a filling made of a biocompatible material, usually a combination of a rubber-like material called gutta-percha and adhesive cement.','Probiotics are mostly known for their role in digestive health, but new research has shown that the healthy bacteria may be beneficial for your teeth and gums.
            ','Probiotics have been shown to prevent plaque and treat bad breath. They also help to prevent oral cancers and decrease inflammation from gum disease.']),
            'preventions' => $this->faker->randomElement(['While large clinical trials are still needed to prove their effectiveness, results to date have been promising. You can take a probiotic supplement or eat foods high in beneficial bacteria, such as yogurt, kefir, and kimchi. Other popular probiotic foods include sauerkraut, tempeh, and miso.','Keeping your mouth healthy is a daily commitment. A dental hygienist can teach you how to properly take care of your teeth and gums on a daily basis. In addition to brushing and flossing, your daily routine can include mouthwash, oral rinses, and possibly other tools, such as a Waterpik water flosser.
            ','Oral surgeries are usually performed to treat more serious cases of periodontal disease. Certain dental surgeries can also be done to replace or fix missing or broken teeth caused by an accident.']),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
