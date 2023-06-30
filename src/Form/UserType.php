<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label_attr' => [
                    'class' =>  'form-label fw-light text-white ms-2'
                ],
                'attr' => [
                    'placeholder' => 'Email',
                    'class' => 'border-bottom form-control text-white bg-primary mx-2',
                    'id' => 'exampleInputEmail1'
                ],
                'constraints' => [
                    new Assert\Email(),
                    new Assert\NotBlank(),
                ],
                'label' => 'Formulário de Inscrição',
                'empty_data' => 'Email',
                'invalid_message' => 'O email informado não é válido!'
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary bg-white text-primary px-3 py-1 mr-4 ms-2'
                ],
                'label' => 'Enviar'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => [
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}
